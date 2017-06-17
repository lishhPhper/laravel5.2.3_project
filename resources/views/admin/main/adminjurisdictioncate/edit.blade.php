<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>权限分类修改</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="{{ asset('templates/admin/css/x-admin.css') }}" media="all">
    </head>
    
    <body>
        <div class="x-body">
            <form class="layui-form">
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        ID
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="cname" required="" lay-verify="required"
                        autocomplete="off"  value="1" disabled="" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>分类名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="cname" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">所属分类</label>
                    <div class="layui-input-inline" >
                        <select name="fid">
                            <option value="0">顶级分类</option>
                            <option value="新闻">新闻</option>
                            <option value="新闻子类1">--新闻子类1</option>
                            <option value="新闻子类2">--新闻子类2</option>
                            <option value="产品">产品</option>
                            <option value="产品子类1">--产品子类1</option>
                            <option value="产品子类2">--产品子类2</option>
                        </select>
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="save" lay-submit="">
                        保存
                    </button>
                </div>
            </form>
        </div>
        <script src="{{ asset('templates/admin/lib/layui/layui.js') }}" charset="utf-8"></script>
        <script src="{{ asset('templates/admin/js/x-layui.js') }}" charset="utf-8"></script>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            

              //监听提交
              form.on('submit(save)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("保存成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                });
                return false;
              });
              
              
            });
        </script>
    </body>

</html>
