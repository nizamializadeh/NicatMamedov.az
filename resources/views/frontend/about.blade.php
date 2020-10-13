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

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Who We are</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row">
                @foreach($abouts as $about)
                    <div class="col-md-4">
                        <div class="featured-item feature-icon icon-hover icon-hover-blue icon-circle icon-outline clearfix">
                            <div class="icon" style="border: none">
                                <a href="#"><img src="{{asset('photo/'.$about->image)}}" class="img-responsive" alt=""></a>

                            </div>
                            <div class="desc">
                                <h2>{{$about->header}}</h2>
                                <p>{!! $about->description !!}<p>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <section class="section-padding banner-10 bg-fixed parallax-bg overlay light-9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Awesome Team</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-md-3 col-sm-6">
                        <div class="team-wrapper text-center">
                            <div class="team-img">
                                <a href="#"><img src="{{asset('photo/'.$team->image)}}" class="img-responsive" alt="Image"></a>
                            </div>
                            <div class="team-title">
                                <h3><a href="#">{{$team->name}}</a></h3>
                                <span>{{$team->specialty}}</span>
                            </div>
                            <ul class="team-social-links list-inline">
                                <li><a target="_blank" href="{{$team->fb}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="{{$team->inst}}"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>



@endsection