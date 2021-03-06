<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>发货单管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('templates/admin/css/x-admin.css') }}" media="all">
    <link rel="stylesheet" href="{{asset('templates/admin/lib/bootstrap/css/bootstrap.css')}}">
</head>
<body>
<div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>订单管理</cite></a>
              <a><cite>发货管理</cite></a>
            </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">

    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button>
        <button class="layui-btn" onclick="role_add('添加用户','{{ url('adminrole/create') }}','900','500')"><i class="layui-icon">&#xe608;</i>添加</button>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <table class="layui-table">
        <thead>
        <tr>
            <th>
                订单编号
            </th>
            <th>
                下单时间
            </th>
            <th>
                收货人
            </th>
            <th>
                联系电话
            </th>
            <th>
                所选物流
            </th>
            <th>
                物流费用
            </th>
            <th>
                支付时间
            </th>
            <th>
                订单总价
            </th>
            <th>
                操作
            </th>
        </tr>
        </thead>
        @foreach($deliveryList as $value)
        <tbody>
        <tr>
            <td>
                {{$value->order_sn}}
            </td>
            <td>
                {{$value->belongsToOrders['created_at']}}
            </td>
            <td >
                {{$value->consignee}}
            </td>
            <td >
                {{$value->mobile}}
            </td>
            <td >
                {{$value->shipping_name}}
            </td>
            <td >
                {{$value->shipping_price}}
            </td>
            <td >
                {{$value->belongsToOrders['pay_time']}}
            </td>
            <td >
                {{$value->belongsToOrders['total_amount']}}
            </td>
            <td style="width: 160px;">
                <a class="btn btn-primary btn-xs" role="button" href="javascript:;" onclick="question_edit('编辑','{{ url('admin/deliveryinfo').'/'.$value->id}}','1','','800')">查看</a>
                <a class="btn btn-success btn-xs" role="button" href="javascript:;" >发货</a>
            </td>
        </tr>
        </tbody>
            @endforeach
    </table>

    <div id="page"></div>
</div>
<script src="{{ asset('templates/admin/lib/layui/layui.js') }}" charset="utf-8"></script>
<script src="{{ asset('templates/admin/js/x-layui.js') }}" charset="utf-8"></script>
<script>
    layui.use(['laydate','element','laypage','layer'], function(){
        $ = layui.jquery;//jquery
        laydate = layui.laydate;//日期插件
        lement = layui.element();//面包导航
        laypage = layui.laypage;//分页
        layer = layui.layer;//弹出层

        //以上模块根据需要引入
    });

    //批量删除提交
    function delAll () {
        layer.confirm('确认要删除吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
        });
    }
    /*添加*/
    function role_add(title,url,w,h){
        x_admin_show(title,url,w,h);
    }


    //编辑
    function role_edit (title,url,id,w,h) {
        x_admin_show(title,url,w,h);
    }
    /*删除*/
    function role_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }

    //编辑
    function question_edit (title,url,id,w,h) {
        x_admin_show(title,url,w,h);
    }
</script>

</body>
</html>