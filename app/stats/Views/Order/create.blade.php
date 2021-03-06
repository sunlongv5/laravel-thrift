@extends('layouts.master')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h3>
                站点详情
            </h3>
        </header>
        <div class="panel-body">
            <form action="http://mg.com/station/manage/store" method="post" class="form-horizontal station-form">
                <div class="form-group error_msg_div" style="margin-left: 30%;display: none">
                    <div class="alert alert-danger fade in col-sm-4">
                        <span class="error_msg"></span>
                    </div>
                </div>
                <input type="hidden" name="dot_id" value="2">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>站点名称</label>
                    <div class="col-sm-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>管理员手机号</label>
                    <div class="col-sm-2">
                        <input type="text" name="tel" class="form-control" id="tel">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>姓名</label>
                    <div class="col-sm-2">
                        <input type="text" name="manager" class="form-control" id="manager">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>快递公司</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="orgnization_id" id="orgnization_id">
                            <option value="-1">请选择</option>
                            <option value="4">DHL</option>
                            <option value="11">EMS</option>
                            <option value="23">一号店</option>
                            <option value="42">万象快递</option>
                            <option value="16">中国邮政</option>
                            <option value="9">中通</option>
                            <option value="17">亚马逊</option>
                            <option value="6">京东</option>
                            <option value="19">优速</option>
                            <option value="34">全一</option>
                            <option value="13">全峰</option>
                            <option value="43">全成快递</option>
                            <option value="44">其它</option>
                            <option value="31">南京跑蹆</option>
                            <option value="37">和社区快递</option>
                            <option value="21">唯品会</option>
                            <option value="12">国通</option>
                            <option value="3">圆通</option>
                            <option value="26">增益</option>
                            <option value="7">天天</option>
                            <option value="14">天猫</option>
                            <option value="33">好享购</option>
                            <option value="22">如风达</option>
                            <option value="8">宅急送</option>
                            <option value="29">当当网</option>
                            <option value="25">德邦</option>
                            <option value="30">快捷</option>
                            <option value="20">晟邦</option>
                            <option value="32">格格快递</option>
                            <option value="5">汇通</option>
                            <option value="1">申通</option>
                            <option value="39">百盛宅配</option>
                            <option value="41">立即送</option>
                            <option value="35">联邦</option>
                            <option value="24">苏宁易购</option>
                            <option value="15">苏州门对门</option>
                            <option value="18">赛澳递</option>
                            <option value="27">速尔</option>
                            <option value="10">韵达</option>
                            <option value="2">顺丰</option>
                            <option value="36">魔格快递</option>
                            <option value="28">龙邦</option>
                            <option value="38">龙邦</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>站点地区</label>
                    <div class="col-sm-8">
                        <script src="/static/js/jQuery.cxSelect-1.4.0/js/jquery.cxselect.min.js"></script>
                        <script>
                            $(function(){
                                $('#moge_address').cxSelect({
                                    url: '/static/moge-city.min.json?20160615',
                                    selects: ['group', 'city', 'area'],
                                    jsonName: 'name',
                                    jsonValue: 'value',
                                    jsonSub: 'sub',
                                    required: false,        // 是否为必选
                                    firstTitle: '请选择',    // 第一个选项的标题
                                    firstValue: 'all',         // 第一个选项的值
                                    emptyStyle: 'none'
                                });
                            });
                        </script>

                        <div class="btn-group">
                            <div id="moge_address">
                                <select class="group form-control input" style="float: left;" name="group"><option value="all">请选择</option><option value="1">华北区</option><option value="2">华东区</option><option value="3">华南区</option><option value="4">华中区</option><option value="5">西南区</option></select>
                                <select class="city form-control input" style="float: left; display: none;" data-value="" name="city" disabled=""></select>
                                <select class="area form-control input" style="float: left; display: none;" data-value="" name="area" disabled=""></select>
                            </div>
                        </div>                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><i class="required">*</i>详细地址</label>
                    <div class="col-sm-4">
                        <input type="text" name="address" class="form-control" id="address" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div style="float:left;margin-left: 30%">
                        <button type="button" class="btn btn-success submit-value">提交</button>
                    </div>
                    <div style="float:left;margin-left: 5%">
                        <button type="reset" class="btn btn-danger reset-value">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div id="confirm_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title confirm_modal_title">

                    </h4>
                </div>
                <div class="modal-body">
                    <p class="confirm_modal_content">

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger sure" type="button"> 确认</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/js/support-station.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.submit-value').on('click',function(){
                var name = $('#name').val();
                var tel  = $('#tel').val();
                var group = $('select.group').val();
                var city = $('select.city').val();
                var area = $('select.area').val();
                var address = $('#address').val();
                var manager = $('#manager').val();
                var orgnization_id = $('#orgnization_id').val();
                var error_msg_div = $('.error_msg_div');
                var error_msg = $('.error_msg');
                var $msg;
                if ($.trim(name).length == 0) {
                    $msg = '请填写站点名';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if (!tel.match(/^\d+$/) || tel.length != 11) {
                    $msg = '请填写正确的手机号';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if ($.trim(manager).length == 0) {
                    $msg = '请填写管理人姓名';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if (orgnization_id == -1) {
                    $msg = '请选择快递公司';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if (group == 'all') {
                    $msg = '请选择大区';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if (city == 'all') {
                    $msg = '请选择市';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                if ($.trim(address).length == 0) {
                    $msg = '请填写详细地址';
                    error_msg.html($msg);
                    error_msg_div.show();
                    return false;
                }
                error_msg.html();
                error_msg_div.hide();
                var title = $('.confirm_modal_title');
                var content = $('.confirm_modal_content');
                var option = {
                    success:function(ret){
                        if(ret.ret == 1){
                            $('.sure').on('click',function(){
                                location.reload();
                            });
                        }else{
                            $('.sure').on('click',function(){
                                $('#confirm_modal').modal('hide');
                            });
                        }
                        title.html('提示');
                        content.html(ret.msg);
                        $('#confirm_modal').modal('show');
                    },
                    error:function(ret){

                    }};
                $('.station-form').ajaxSubmit(option);
            });
        });
    </script>
@stop
