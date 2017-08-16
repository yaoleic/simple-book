@extends("layout.main")

@section("content")

    <div class="col-sm-12 blog-main">
        <form action="/posts" method="POST">
            {{csrf_field()}}
            <div class="form-group">

                <input name="title" type="text" class="form-control" placeholder="输入标题">
            </div>
            <div class="form-group">
                <!-- 加载编辑器的容器 -->
                <script id="eidt-container" name="content" type="text/plain">

                </script>
                {{--<textarea id="eidt-container"  style="height:400px;max-height:500px;" name="content" class="form-control" placeholder="输入内容"></textarea>--}}
            </div>
            @include("layout.error")
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->


    <!-- 配置文件 -->
    <script type="text/javascript" src="/js/u-editor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/js/u-editor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var cache = JSON.parse(localStorage.getItem('ueditor_preference'));

        var ue = UE.getEditor('eidt-container',{
            initialContent:cache['http_127_0_0_1_8000_posts_createeidt-container-drafts-data'],

            autoHeightEnabled: true,
            autoFloatEnabled: true,

        });
        console.log(cache);

    </script>

@endsection

