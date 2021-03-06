class Select extends SimpleModule

  opts:
    el: null
    cls: ""
    onItemRender: $.noop
    placeholder: ""
    allowInput: false
    multiline: true,
    ajaxUrl: ""

  @i18n:
    "zh-CN":
      all_options: "所有选项"
      clear_selection: "清除选择"
      loading: "加载中..."
    "en":
      all_options: "All options"
      clear_selection: "Clear Selection"
      loading: "Loading..."

  @_tpl:
    textarea: """
      <textarea rows=1 type="text" class="select-result" autocomplete="off"></textarea>
    """

    input: """
      <input type="text" class="select-result" autocomplete="off">
    """

    item: """
      <div class="select-item">
        <a href="javascript:;" class="label"><span></span></a>
        <span class="hint"></span>
      </div>
    """

  _init: ->
    unless @opts.el
      throw "simple select: option el is required"
      return

    @ajaxUrl = @opts.ajaxUrl || @opts.el.data("ajax")
    @opts.el.data("select")?.destroy()
    @_render()
    @_bind()
    @autoresizeInput()


  _render: ->
    Select._tpl.select = """
      <div class="simple-select">
        <span class="link-expand" title="#{@_t('all_options')}">
          <i class="icon-caret-down"><span>&#9662;</span></i>
        </span>
        <span class="link-clear" title="#{@_t('clear_selection')}">
          <i class="icon-delete"><span>&#10005;</span></i>
        </span>
        <div class="select-list">
          <div class="loading">#{@_t('loading')}</div>
        </div>
      </div>
    """

    @el = $(@opts.el).hide()
    @el.data("select", @)
    @select = $(Select._tpl.select)
      .data("select", @)
      .addClass(@opts.cls)
      .insertBefore @el
    if @opts.multiline
      @select.addClass('multiline')
      inputTpl = Select._tpl.textarea
    else
      inputTpl = Select._tpl.input

    @input = $(inputTpl)
      .attr("placeholder", @opts.placeholder || @el.data('placeholder') || "")
      .prependTo @select
    @list = @select.find ".select-list"

    @requireSelect = true
    @items = @el.find("option").map (i, option) =>
      $option = $(option)
      value = $option.attr 'value'
      label = $option.text().trim()

      unless value
        @requireSelect = false
        return

      $.extend({
        label: label,
        _value: value
      }, $option.data())
    .get()

    @generateList()
    @select.toggleClass 'require-select', @requireSelect

  _expand: (expand) ->
    if expand is false
      @input.removeClass "expanded"
      @list.hide()
    else
      @input.addClass "expanded"
      @list.show() if @items.length > 0
      @list.css("top", @input.outerHeight() + 4)
      @_scrollToSelected() if @_selectedIndex > -1


  _scrollToSelected: ->
    return if @_selectedIndex < 0
    $selectedEl = @list.find(".select-item").eq @_selectedIndex
    @list.scrollTop $selectedEl.position().top


  _bind: ->
    @select.find(".link-clear").on "mousedown", (e) =>
      @clearSelection()
      return false

    @select.find(".link-expand").on "mousedown", (e) =>
      @_expand !@input.hasClass("expanded")
      @input.focus() unless @_focused
      return false

    @list.on "mousedown", (e) =>
      if window.navigator.userAgent.toLowerCase().indexOf('msie') > -1
        @_scrollMousedown = true
        setTimeout =>
          @input.focus()
        , 0
      return false
    .on "mousedown", ".select-item", (e) =>
      index = @list.find(".select-item").index $(e.currentTarget)
      @selectItem index
      @input.blur()
      return false

    @input.on "keydown.select", (e) =>
      @_keydown(e)
    .on "keyup.select", (e) =>
      @_keyup(e)
    .on "blur.select", (e) =>
      @_blur(e)
    .on "focus.select", (e) =>
      @_focus(e)

    @select.on "mousedown", (e) =>
      @input.focus()


  _keydown: (e) ->
    return unless @items and @items.length
    return if @triggerHandler(e) is false

    if e.which is 40 or e.which is 38  # up and down
      unless @input.hasClass "expanded"
        @_expand()
        $itemEls = @list.find(".select-item").show()
        $itemEls.first().addClass("selected") if @_selectedIndex < 0

      else
        $selectedEl = @list.find ".select-item.selected"
        unless $selectedEl.length
          @list.find(".select-item:first").addClass "selected"
          return

        if e.which is 38
          $prevEl = $selectedEl.prevAll(".select-item:visible:first")
          if $prevEl.length
            $selectedEl.removeClass "selected"
            $prevEl.addClass "selected"
        else if e.which is 40
          $nextEl = $selectedEl.nextAll(".select-item:visible:first")
          if $nextEl.length
            $selectedEl.removeClass "selected"
            $nextEl.addClass "selected"

    else if e.which is 13  # enter
      e.preventDefault()
      if @input.hasClass "expanded"
        $selectedEl = @list.find ".select-item.selected"
        if $selectedEl.length
          index = @list.find(".select-item").index $selectedEl
          @selectItem index
          return false
      else if @_selectedIndex > -1
        @selectItem @_selectedIndex

      if @opts.allowInput
        @input.blur()
        return false

      @clearSelection()
      return false

    else if e.which is 27  # esc
      e.preventDefault()
      @input.blur()

    else if e.which is 8 and not @ajaxUrl  # backspace
      @clearSelection() if @select.hasClass "selected"
      @_expand() unless @input.hasClass "expanded"
    @autoresizeInput()


  _keyup: (e) ->
    return false if $.inArray(e.which, [13, 40, 38, 9, 27]) > -1
    @autoresizeInput()

    if @_keydownTimer
      clearTimeout(@_keydownTimer)
      @_keydownTimer = null

    $itemEls = @list.find ".select-item"
    @_keydownTimer = setTimeout =>
      @_expand() unless @input.hasClass "expanded"
      if @select.hasClass "selected"
        @select.removeClass "selected"

      value = $.trim @input.val()
      unless value
        @list.show() if @items.length > 0
        $itemEls.show().removeClass "selected"
        return

      if @ajaxUrl
        _.debounce @ajaxGet(value), 500, true
        return

      try
        re = new RegExp("(|\\s)" + value, "i")
      catch e
        re = new RegExp("", "i")

      results = $itemEls.hide().removeClass("selected").filter ->
        return re.test $(@).data("key")

      if results.length
        @list.show() if @items.length > 0
        results.show().first().addClass "selected"
      else
        @list.hide()
    , 0


  _blur: (e) ->
    if @_scrollMousedown
      @_scrollMousedown = false
      return false

    @input.removeClass "expanded error"
    @list.hide()
      .find(".select-item")
      .show()
      .removeClass "selected"

    value = $.trim @input.val()
    if !@select.hasClass("selected")
      if @opts.allowInput
        @el.val ''
        @trigger 'select', [{label: value, _value: -1}]
      else if value
        matchIdx = -1
        $.each @items, (i, item) ->
          if (item.label is value)
            matchIdx = i
            return false
        if matchIdx >= 0
          @selectItem matchIdx
        else
          @selectItem Math.max(@_selectedIndex || -1, 0)
      else if @requireSelect and @items.length > 0
        @selectItem 0
      else
        @el.val ''

    @_focused = false

  _focus: (e) ->
    @_expand()
    if @_selectedIndex > -1
      @list.find(".select-item").eq(@_selectedIndex).addClass("selected")
    setTimeout =>
      @input.select()
    , 0
    @_focused = true


  ajaxGet: (value) ->
    return if value is @_ajaxSearchValue
    @_ajaxSearchValue = value
    url = @ajaxUrl + '&query=' + value
    $.get url, (items) =>
      @items = items
      @list.empty()
      @el.empty()

      if $.isArray(items) && items.length > 0
        @requireSelect = true
      @select.toggleClass 'require-select', @requireSelect
      @el.prepend('<option></option>') unless @requireSelect
        for item in items
          @el.append("<option value=\"#{item._value}\">#{item.label}</option>")

      @generateList()
      @_expand()

  generateList: ->
    @list.empty()
    for item in @items
      $itemEl = $(Select._tpl.item).data(item)
      $itemEl.find(".label span").text(item.label)
      $itemEl.find(".hint").text(item.hint)

      @list.append $itemEl
      @opts.onItemRender.call(@, $itemEl, item)  if $.isFunction @opts.onItemRender

    for it, idx in @items
      if it._value is @el.val()
        @selectItem idx
        break

  setItems: (items, requireSelect = true) ->
    @items = items
    @clearSelection()
    @list.empty()
    @el.empty()

    if $.isArray(items) && items.length > 0
      @requireSelect = requireSelect
      @select.toggleClass 'require-select', @requireSelect
      @el.prepend('<option></option>') unless @requireSelect
      for item in items
        @el.append("<option value=\"#{item._value}\">#{item.label}</option>")

      @generateList()

  selectItem: (index) ->
    return unless @items

    if $.isNumeric index
      return if index < 0

      item = @items[index]
      @select.addClass "selected"
      @input.val item.label
        .removeClass "expanded error"
      @list.hide()
        .find ".select-item"
        .eq index
        .addClass "selected"

      @_selectedIndex = index
      @el.val item._value
      @trigger "select", [item]
      @autoresizeInput()

    return @items[@_selectedIndex] if @_selectedIndex > -1


  clearSelection: ->
    @input.val("").removeClass("expanded error")
    @select.removeClass("selected")
    @list.hide()
      .find(".select-item")
      .show()
      .removeClass "selected"

    @_selectedIndex = -1
    @el.val ''
    @trigger "clear"
    @autoresizeInput()


  autoresizeInput: () ->
    return unless @opts.multiline
    setTimeout () =>
      @input.css("height", 0)
      @input.css("height", parseInt(@input.get(0).scrollHeight) + parseInt(@input.css("border-top-width")) + parseInt(@input.css("border-bottom-width")))
    , 0


  disable: ->
    @input.prop "disabled", true
    @select.find(".link-expand, .link-clear").hide()


  enable: ->
    @input.prop "disabled", false
    @select.find(".link-expand, .link-clear").attr("style", "")


  destroy: ->
    @select.remove()
    @el.removeData 'select'
    @el.show()


select = (opts) ->
  new Select(opts)
