@extends("layout.main")

@section("content")

    <div class="col-sm-8 blog-main">

        <div class="user-info">
            <img src="{{$user->gravater(140)}}" alt="" class="img-rounded" style="border-radius:500px; height: 40px"> {{$user->name}}

            <div class="user-info-right">关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}｜文章：{{$user->posts_count}}</div>
            @include('user.badges.like', ['target_user' => $user])

        </div>

        <div class="nav-tabs-custom">


            <ul class="nav nav-tabs ">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">关注</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉丝</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @foreach($posts as $post)

                        <div class="blog-post">
                            <?php \Carbon\Carbon::setLocale('zh');?>
                            <p class="blog-post-meta"><a href="/user/{{$post->user_id}}">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}</p>
                            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}" >{{$post->title}}</a></h2>
                            {{--<div class="blog-post-desc">--}}
                                {{--{!! str_limit($post->content, 100, '...') !!}--}}
                            {{--</div>--}}
                        </div>

                    @endforeach


                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    @foreach($stars as $star)
                        <?php $suser = $star->suser()->first(); ?>
                        <div class="blog-post">
                            <p class="">{{$suser->name}}</p>
                            <p class="">关注：{{$suser->stars()->count()}} | 粉丝：{{$suser->fans()->count()}}｜ 文章：{{$suser->posts()->count()}}</p>

                            @include('user.badges.like', ['target_user' => $suser])
                        </div>
                    @endforeach
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    @foreach($fans as $fan)
                        <?php $fuser = $fan->fuser()->first(); ?>
                        <div class="blog-post">
                            <p class="">{{$fuser->name}}</p>
                            <p class="">关注：{{$fuser->stars()->count()}} | 粉丝：{{$fuser->fans()->count()}}｜ 文章：{{$fuser->posts()->count()}}</p>

                        @include('user.badges.like', ['target_user' => $fuser])
                        </div>
                    @endforeach
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>


    </div><!-- /.blog-main -->
    @include('layout.sidebar')


@endsection