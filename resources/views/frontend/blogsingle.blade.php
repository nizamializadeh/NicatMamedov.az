@extends('layouts.frontend.frontend')
@section('content')







    <section class="page-title ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="posts-content single-post">
                        <article class="post-wrapper">
                            <header class="entry-header-wrapper clearfix">

                                <div class="entry-header">
                                    <h2 class="entry-title">{{$blog->header}}</h2>
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <!-- <li>
                                            <i class="fa fa-user"></i><a href="#">Trendy Theme</a>
                                            </li> -->
                                            <li>
                                                <i class="fa fa-clock-o"></i><a href="#">{{$blog->created_at->format('M d Y')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </header>
                            <div class="thumb-wrapper">
                                <img src="{{asset('photo/'.$blog->image)}}" class="img-responsive" alt="">
                            </div>
                            <div class="entry-content">
                                <p>{!! $blog->description !!}</p>

                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tt-sidebar-wrapper" role="complementary">

                        <div class="widget widget_tt_author_widget">
                            <div class="author-info-wrapper">
                                <div class="author-cover">
                                    <img src="site/assets/img/author/nicat.jpg" alt="">
                                </div>
                                <div class="author-avatar">
                                    <img src="assets/img/blog/author-2.jpg" alt="">
                                    <h2>John Doe</h2>
                                    <span>User Interface Designer</span>
                                </div>
                                <p>All these men were men of conviction. They deeply believed in what they were doing and put their reputations.</p>
                                <div class="author-social-links">
                                    <ul class="list-inline">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tt_popular_post">
                            <div class="tt-popular-post border-bottom-tab">

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Popular</a>
                                    </li>
                                    <li class="">
                                        <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div id="tt-popular-post-tab1" class="tab-pane fade active in">
                                        @foreach($populars as $popular)
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="{{asset('photo/'.$popular->image)}}" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <h4><a href="{{ route('blogsingle', $popular->id) }}">{{$popular->header}}</a></h4>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>

                                    <div id="tt-popular-post-tab2" class="tab-pane fade">
                                        @foreach($lasteds as $lasted)
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="{{asset('photo/'.$lasted->image)}}" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <h4><a href="{{ route('blogsingle', $lasted->id) }}">{{$lasted->header}}</a></h4>

                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection