@extends("layout.main")


@section("content")



    <div class="col-sm-8 blog-main">

        {{--@include("post.carousel")--}}

        <div>
            @foreach($posts as $post)

            <div class="blog-post">
                <p class="blog-post-meta"><a href="/user/{{$post->user_id}}">{{$post->user->name}}</a> {{$post->created_at->toFormattedDateString()}}</p>
                <h2 class="blog-post-title"><a href="/posts/{{$post->id}}" >{{str_limit($post->title,'60',"...")}}</a></h2>
                {{--<div class="blog-post-desc">--}}

                    {{--{{ str_limit($post->desc, 100, '...') }}--}}
                {{--</div>--}}
                <p class="blog-post-meta">赞 {{$post->zans_count}}  | 评论 {{$post->comments_count}}</p>
            </div>

            @endforeach

            {{$posts->links()}}
        </div><!-- /.blog-main -->
    </div>

    @include("layout.sidebar")
@endsection
