@extends("layout.main")

@section("content")

    <div class="col-sm-12 blog-main">
        <form action="/posts/{{$post->id}}" method="POST">
            {{method_field("PUT")}}
            {{csrf_field()}}
            <div class="form-group">
                <input name="title" type="text" class="form-control" placeholder="这里是标题" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <script id="eidt-container" style="height: 500px" name="content" type="text/plain">
                    {!! $post->content !!}
                </script>
                {{--<textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="这里是内容">{!! $post->content !!}</textarea>--}}
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
        var ue = UE.getEditor('eidt-container');
    </script>

@endsection