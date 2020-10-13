@extends('layouts.frontend.frontend')
@section('content')

    <section style="padding: 100px 0px;">

    </section>
    <div class="portfolio-container">
        <ul class="portfolio-filter brand-filter text-center">
            <li class=" active waves-effect waves-light" data-group="all">Hamsı</li>
            @foreach($categories as $category)
                <li class="  waves-effect waves-light" data-group="{{$category->name}}">{{$category->name}}</li>
            @endforeach
        </ul>
        <div class="portfolio portfolio-with-title col-3 gutter mtb-50">
             @foreach($galleryies as $gallery)
                <div class="portfolio-item" data-groups='["{{$gallery->name}}"]'>
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a class="view" href="{{asset('photo/'.$gallery->image)}}">
                                <img class="img-responsive activator" src="{{asset('photo/'.$gallery->image)}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection