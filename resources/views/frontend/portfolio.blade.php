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
            <div class="text-center mb-50">
                <h2 class="section-title">Works</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet vived at vestibulum purus erra,</p>
            </div>
            <div class="portfolio-container">

                <div class="portfolio portfolio-with-title col-3 gutter mtb-50">

                @foreach($portfolios as $portfolio)
                        <div class="portfolio-item" data-groups='["all", "marketing", "photography"]'>
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{asset('photo/'.$portfolio->image)}}" alt="image">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator">{{$portfolio->header}} <i class="fa fa-ellipsis-v right"></i> </span>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title"> <i class="material-icons right">&#xE5CD;</i></span>
                                    <p><a href="#"></a></p>
                                    <p>
                                    {!! Str::words($portfolio->description,9, '...')!!}
                                        <div></div>
                                        <a href="{{ route('portsingle', $portfolio->id) }}" class="readmore">Ətraflı<i class="fa fa-long-arrow-right"></i></a>


                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>





            </div>

        </div>
    </section>




@endsection