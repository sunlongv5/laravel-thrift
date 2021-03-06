@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    通话 #N5693912D02BB008800014002
                <span class="pull-right">
                    <a class="btn btn-sm btn-danger popovers" data-toggle="modal" href="#sendmsg" data-original-title="" title="">发送短信</a>
                                    </span>
                </header>
                <div class="panel-body">
                    <h3 style="margin: 0; display: inline-block">来电 <span style="color: #0000C2;font-weight: bolder;">1</span> 次</h3>
                    <h3 style="margin: 0 0 0 40px; display: inline-block">还有 <span style="color: #0000C2;font-weight: bolder;">0</span> 个未处理工单</h3>
                </div>

                <div class="panel-body">
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">通话记录</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">存件记录</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">快递员列表</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">快递员租用</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">菜鸟寄件</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">寄存订单</a>
                    <a class="btn btn-sm btn-success" target="_blank" href="#">增值订单</a>
                    <a href="#" class="btn btn-sm btn-primary" target="_blank">工单列表</a>
                    <a class="btn btn-sm btn-danger popovers" data-toggle="modal" href="#setUserTag" data-original-title="" title="">标记用户</a>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle" type="button" aria-expanded="false">创建工单 <span class="caret"></span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a target="_blank" href="#">黑屏</a></li>
                            <li><a target="_blank" href="#">黑斑</a></li>
                            <li><a target="_blank" href="#">屏幕亮度过暗</a></li>
                            <li><a target="_blank" href="#">白屏或花屏</a></li>
                            <li><a target="_blank" href="#">闪屏</a></li>
                            <li><a target="_blank" href="#">卡屏</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 inv-label">手机号 #</div>
                                <div class="col-md-8">
                                    <p>13725515160</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">通话类型 #</div>
                                <div class="col-md-8 text-danger"> 呼入</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">问题分类 #</div>
                                <div class="col-md-8 text-danger"><strong>快递查询 业主</strong></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">问题状态 #</div>
                                <div class="col-md-8 text-danger"><strong>通话结束</strong></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 inv-label">callid #</div>
                                <div class="col-md-8">N5693912D02BB008800014002</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">客服 #</div>
                                <div class="col-md-8">未知</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">接入 #</div>
                                <div class="col-md-8">2016-03-02 16:56:15</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 inv-label">结束 #</div>
                                <div class="col-md-8">2016-03-02 16:57:04</div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 inv-label">关联终端 #</div>
                                <div class="col-md-10">
                                    无
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 inv-label">问题描述 #</div>
                                <div class="col-md-10"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 inv-label">用户标记 #</div>
                                <div class="col-md-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <h4>存件记录<span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span></h4>
                </header>
                <div class="panel-body">
                    <table class="table general-table">
                        <thead>
                        <tr>
                            <th>单号</th>
                            <th>终端信息</th>
                            <th>格口信息</th>
                            <th>快递员</th>
                            <th>包裹状态</th>
                            <th>派件/取件时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="pagination-sm pull-right">
                        默认查询最近5条记录，<a target="_blank" href="#">查看更多</a>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <h4>来电记录<span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span></h4>
                </header>
                <div class="panel-body">
                    <table class="table general-table">
                        <thead>
                        <tr>
                            <th>通话类型</th>
                            <th>问题归档</th>
                            <th>问题描述</th>
                            <th>处理人</th>
                            <th>创建时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>呼入</td>
                            <td>快递查询 业主</td>
                            <td></td>
                            <td>未知</td>
                            <td>2016-03-02 16:56:15</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="pagination-sm pull-right">
                        默认查询该手机号最近3条拨入拨出记录，<a target="_blank" href="#">查看更多</a>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <h4>工单记录<span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span></h4>
                </header>
                <div class="panel-body">
                    <table class="table general-table">
                        <thead>
                        <tr>
                            <th>工单类型</th>
                            <th>问题描述</th>
                            <th>状态</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="pagination-sm pull-right">
                        默认查询该终端&amp;该手机号最近3条记录，<a target="_blank" href="#">查看更多</a>
                    </div>
                </div>
            </section>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="callendDialog" tabindex="-1" role="dialog" aria-labelledby="callendDialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">通话完成</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://mg.com/kefu/records/96492" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="weEoGMrm7PE5TZ69ksIVzDjuRGqoj0tekVmTbvKn">
                            <div class="modal-body">
                                <input type="hidden" name="action" value="callend">
                                <!--                         <select class="form-control" name="status">
                                                            <option value="1">已解决</option>
                                                            <option value="0">未解决</option>
                                                        </select> -->
                                <!-- <br> -->
                                <select class="form-control" name="p_category_id">
                                    <option value="1">未归档</option>
                                    <option value="2">格格货栈</option>
                                    <option value="3">格格云店</option>
                                    <option value="101">聚宝传媒</option>
                                </select>
                                <div id="c_category_id"></div>

                                <br>
                                <input name="data[terminal_code]" type="hidden" value="">

                                <input class="form-control  m-bot15" type="text" name="terminal_code" value="" data-provide="typeahead" autocomplete="off" placeholder="可选, 输入终端名"><ul class="typeaheadajax dropdown-menu"></ul>

                                <textarea class="form-control m-bot15" type="text" placeholder="若需要可填写备注信息" name="remark"></textarea>
                                <input type="hidden" name="data[tel]" value="13725515160">
                                <select class="form-control m-bot15" name="data[tag_id]"><option value="0" selected="selected">用户标记</option><option value="1">禁用微信</option><option value="2">短信收不到</option><option value="3">用户不用柜子</option><option value="4">禁用APP</option><option value="5">禁用菜鸟裹裹</option><option value="6">裹裹白名单</option></select>
                                <textarea class="form-control" rows="3" placeholder="用户标记备注" name="data[note]" cols="50"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="submit">确认</button>
                            </div>
                        </form>
                        <div style="display:none">
                            <div pid="1" class="category_id">
                                <select class="form-control" name="category_id">
                                    <option value="136">test</option>
                                </select>
                            </div>
                            <div pid="2" class="category_id">
                                <select class="form-control" name="category_id">
                                    <option value="79">查询快递员电话</option>
                                    <option value="80">快递查询 业主</option>
                                    <option value="81">快递查询 快递员/快递公司</option>
                                    <option value="82">查询验证码 号码错误 </option>
                                    <option value="83">查询验证码  短信发送成功</option>
                                    <option value="84">查询验证码  短信发送失败</option>
                                    <option value="110">地址查询</option>
                                    <option value="111">注册</option>
                                    <option value="112">充值</option>
                                    <option value="113">空柜</option>
                                    <option value="114">开柜</option>
                                    <option value="115">黑屏</option>
                                    <option value="116">卡屏</option>
                                    <option value="117">无网络</option>
                                    <option value="118">故障报修</option>
                                    <option value="119">其他</option>
                                    <option value="133">柜门故障</option>
                                    <option value="134">业务合作</option>
                                    <option value="135">咨询如果使用快递柜</option>
                                    <option value="138">asdsad</option>
                                    <option value="139">sasaa</option>
                                    <option value="140">徐国建</option>
                                    <option value="141">呵呵哒</option>
                                </select>
                            </div>
                            <div pid="3" class="category_id">
                                <select class="form-control" name="category_id">
                                    <option value="120">活动咨询</option>
                                    <option value="121">商品咨询</option>
                                    <option value="122">送货范围</option>
                                    <option value="123">配送时间</option>
                                    <option value="124">取消订单</option>
                                    <option value="125">品质</option>
                                    <option value="126">漏发</option>
                                    <option value="127">错发</option>
                                    <option value="128">缺货</option>
                                    <option value="129">其他</option>
                                    <option value="137">fufu</option>
                                    <option value="142">vsvcvcxv</option>
                                </select>
                            </div>
                            <div pid="101" class="category_id">
                                <select class="form-control" name="category_id">
                                    <option value="130">广告合作</option>
                                    <option value="131">广告投诉</option>
                                    <option value="132">伊管家</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sendmsg" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">发送短信</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://mg.com/kefu/send_msg" accept-charset="UTF-8"><input name="_token" type="hidden" value="weEoGMrm7PE5TZ69ksIVzDjuRGqoj0tekVmTbvKn">
                            <div class="modal-body">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white">手机号</span>
                                    <input type="numeric" class="form-control" value="13725515160" name="tel">
                                </div>
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white">短信模板</span>
                                    <select class="form-control" name="template"><option value="">请选择</option><option value="您好，{1}如有疑问欢迎咨询客服热线4000338888">通用</option><option value="请凭提取码{1}到{2}格格货栈，绑定微信公众号“格格小区”接收实时通知，询4000338888">验证码</option><option value="{1}快递员电话{2}，绑定微信公众号“格格小区”接收实时通知，询4000338888">快递员手机号码</option></select>
                                </div>
                                <textarea class="form-control" type="text" id="msg_box" rows="5" placeholder="短信内容" name="message"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="submit">发送</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function(){
                $('select[name="p_category_id"]').on('change',function(){
                    var pid =  $(this).val();
                    var c_category = $('.category_id[pid="'+pid+'"]').html()
                    $('#c_category_id').html(c_category);
                });

                $('.resendCode').click(function(){
                    $(this).remove();
                });

                $('select[name="template"]').on('change',function(){
                    $('#msg_box').val($(this).val());
                });

                // 标记tag
                $('#sendmsg form').on('submit', function(){
                    var data = $(this).serialize();
                    $('#sendmsg').modal('hide');
                    updateData($('#sendmsg form').attr('action'), data, 'post');
                    return false;
                });
            });
        </script>
        <div class="modal fade" id="setUserTag" tabindex="-1" role="dialog" aria-labelledby="setUserTag" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">标记该用户使用短信推送</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://mg.com/kefu/records/96492" accept-charset="UTF-8" class="form-horizontal"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="weEoGMrm7PE5TZ69ksIVzDjuRGqoj0tekVmTbvKn">
                            <div class="modal-body">
                                <input type="hidden" name="data[tel]" value="13725515160">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><i class="required">*</i>添加标记</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="data[tag_id]"><option value="0" selected="selected"></option><option value="1">禁用微信</option><option value="2">短信收不到</option><option value="3">用户不用柜子</option><option value="4">禁用APP</option><option value="5">禁用菜鸟裹裹</option><option value="6">裹裹白名单</option></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><i class="required">*</i>备注</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" name="data[note]" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="submit">确认</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
