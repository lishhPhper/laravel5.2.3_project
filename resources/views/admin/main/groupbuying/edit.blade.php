<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>活动信息修改</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="{{asset('templates/admin/css/x-admin.css')}}" media="all">
    </head>
    
    <body>
        <div class="x-body">
            <form class="layui-form layui-form-pane">
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="L_title" name="title" required lay-verify="title" value="layDate如何设置最小时间为当前" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <script id="container" name="content" type="text/plain"></script>
                        <!-- 配置文件 -->
                        <script type="text/javascript" src="{{asset('templates/admin/ueditor/ueditor.config.js')}}"></script>
                        <!-- 编辑器源码文件 -->
                        <script type="text/javascript" src="{{asset('templates/admin/ueditor/ueditor.all.js')}}"></script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                        </script>
                    </div>
                    <label for="L_content" class="layui-form-label" style="top: -2px;">
                        描述
                    </label>
                </div>
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">
                            所在类别
                        </label>
                        <div class="layui-input-block">
                            <select lay-verify="required" name="cid">
                                <option>
                                </option>
                                <optgroup label="Layui相关">
                                    <option value="0">layui</option>
                                    <option value="2">layer弹层</option>
                                    <option value="3">LayIM即时通讯</option>
                                </optgroup>
                                <optgroup label="其它交流">
                                    <option selected="" value="100">技术闲谈</option>
                                    <option value="101">建议反馈</option>
                                    <option value="168">官方公告</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn" lay-filter="add" lay-submit>
                        保存
                    </button>
                </div>
            </form>
        </div>
        <script src="{{asset('templates/admin/lib/layui/layui.js')}}" charset="utf-8"></script>
        <script src="{{asset('templates/admin/js/x-layui.js')}}" charset="utf-8"></script>
        <script>
            layui.use(['form','layer','layedit'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer
              ,layedit = layui.layedit;


                layedit.set({
                  uploadImage: {
                    url: "./upimg.json" //接口url
                    ,type: 'post' //默认post
                  }
                })
  
            //创建一个编辑器
            editIndex = layedit.build('L_content');
            
              

              //监听提交
              form.on('submit(add)', function(data){
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