@extends('layouts.frontend.frontend')
@section('content')

    <section >
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">

                @foreach($sliders as $slider)
                    <div class="item {{ $slider->image==$loop->first ? 'active' : '' }}">
                            <img class="img-responsive" src="{{asset('photo/'.$slider->image)}}" alt="">
                    </div>
                @endforeach
            </div>
            <!-- Carousel nav -->
            {{--<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>--}}
            {{--<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>--}}
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Our Features</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <ul class="featured plus-box grid-3 equal-height-row">
@foreach($services as $service)
                    <li >
                            <a href="{{ route('service', $service->id) }}">

                            <div class="featured-item equal-height-column">
                                <div class="icon">
                                          <i class="{{$service->icon}}"></i>

                                </div>
                                <div class="desc">
                                    <h2>{{$service->header}}</h2>
                                    <p>{!!$service->description!!}</p>
                                </div>
                            </div>
                        </a>
                    </li>

                @endforeach
            </ul>
        </div>
    </section>

    <section class="section-padding featured-list-news">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Son Xəbərlər</h2>


            </div>
            <div class="row">

@foreach( $blogs as $blog)
                    <div class="col-md-6">

                    <article class="post-wrapper list-article">
                            <div class="hover-overlay blue"></div>
                            <div class="thumb-wrapper waves-effect waves-block waves-light">
                                <a href="#"><img src="{{asset('photo/'.$blog->image)}}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <header class="entry-header-wrapper">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">{{$blog->header}}</a></h2>
                                    </div>
                                </header>
                                <div class="entry-content">
                                    <p>
                                        {!! Str::words($blog->description,9, '...')!!}

                                    </p>
                                    <a href="{{ route('blogsingle', $blog->id) }}" class="readmore">Ətraflı<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                @endforeach



            </div>
        </div>
    </section>




@endsection