@extends('master.front.master')

@section('title')
    Home
@endsection

@section('body')

    <!-- Begin Site Title
================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Mediumish</h1>
            <p class="lead">
                Bootstrap theme, medium style, simply perfect for bloggers
            </p>
        </div>
        <!-- End Site Title
        ================================================== -->

        <!-- Begin Featured
        ================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="">
                                <div class="thumbnail"
                                     style="background-image:url({{asset('/')}}website/img/demopic/1.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="">We're living some strange times</a>
                                </h2>
                                <h4 class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="{{route('author')}}"><img class="author-thumb"
                                                                   src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                                   alt="Sal"></a>
								</span>
                                        <span class="author-meta">
								<span class="post-name"><a href="{{route('author')}}">Steve</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                class="post-read">6 min read</span>
								</span>
                                        <span class="post-read-more"><a href="" title="Read Story"><svg
                                                    class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail"
                                     style="background-image:url({{asset('/')}}website/img/demopic/2.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">The beauty of this world is in your heart</a>
                                </h2>
                                <h4 class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb"
                                                           src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                           alt="Sal"></a>
								</span>
                                        <span class="author-meta">
								<span class="post-name"><a href="author.html">Jane</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                class="post-read">6 min read</span>
								</span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                                    class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail"
                                     style="background-image:url({{asset('/')}}website/img/demopic/3.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">Dreaming of Las Vegas Crazyness</a></h2>
                                <h4 class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb"
                                                           src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                           alt="Sal"></a>
								</span>
                                        <span class="author-meta">
								<span class="post-name"><a href="author.html">Mary</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                class="post-read">6 min read</span>
								</span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                                    class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail"
                                     style="background-image:url({{asset('/')}}website/img/demopic/4.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">San Francisco at its best view in all
                                        seasons</a>
                                </h2>
                                <h4 class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb"
                                                           src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                           alt="Sal"></a>
								</span>
                                        <span class="author-meta">
								<span class="post-name"><a href="author.html">Sal</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                class="post-read">6 min read</span>
								</span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                                    class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </section>
        <!-- End Featured
        ================================================== -->

        <!-- Begin List Posts
        ================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Stories</span></h2>
            </div>
            <div class="card-columns listrecent">

                <!-- begin post -->
                @foreach($recent_blogs as $recent_blog)
                    <div class="card">
                        <a href="{{route('post', [$recent_blog->id])}}">
                            <img class="img-fluid" src="{{asset($recent_blog->image)}}" alt="">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="{{route('post', [$recent_blog->id])}}">{{$recent_blog->main_title}}</a></h2>
                            <h4 class="card-text">{{$recent_blog->short_description}}</h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
                                    <span class="meta-footer-thumb">
                                        <a href="author.html"><img class="author-thumb"
                                                                   src="{{asset('/')}}website/img/avatar-1.jpg"
                                                                   alt="Sal"></a>
                                    </span>
                                    <span class="author-meta">
                                        <span class="post-name"><a href="author.html">{{Auth::user()->name}}</a></span><br/>
                                        <span class="post-date">{{$recent_blog->created_at}}</span><span class="dot"></span><span class="post-read">6 min read</span>
						            </span>
                                    <span class="post-read-more">
                                        <a href="" title="Read Story">
                                            <svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            <!-- end post -->

            </div>
        </section>
        <!-- End List Posts
        ================================================== -->

@endsection
