@extends('layouts.frontend.frontend')
@section('content')









    <section style="padding: 100px 0px;">

    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="font-30 text-medium mb-30">{{$blog->header}}</h2>
            <div class="row">
                <div class="col-md-7">
                    {!! $blog->description !!}
                </div>
                <div class="col-md-5">
                    <div class="gallery-thumb">
                        <ul class="slides">
                            @foreach($blog->images as $image)
                            <li data-thumb="{{asset('photo/'.$image->image)}}">
                                <img  style="max-height:250px" width="150px"  class="img-responsive thumbnai" src="{{asset('photo/'.$image->image)}}">
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection