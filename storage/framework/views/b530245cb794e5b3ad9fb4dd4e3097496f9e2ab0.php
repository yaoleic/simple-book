
<div class="banner">

</div>



<div class="blog-masthead">
    <div class="container">

        <h3 style="">书感</h3>

        <form action="/posts/search" method="GET">


        <ul class="nav blog-nav  navbar-nav navbar-left">

            <li>
                <a class="blog-nav-item " href="/posts">首页</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/posts/create">写文章</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/notices">通知</a>
            </li>

            
                
            
            
                
            

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <div>
                    <img src="<?php echo e($user->gravater()); ?>" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e($user->name); ?>  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user/<?php echo e($user->id); ?>">我的主页</a></li>
                        <li><a href="/user/<?php echo e($user->id); ?>/setting">个人设置</a></li>
                        <li><a href="/logout">登出</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        </form>
    </div>
</div>

