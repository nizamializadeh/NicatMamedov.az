@extends('layouts.frontend.frontend')
@section('content')


    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="text-center mb-80">
                    <h2 class="section-title text-uppercase">{{$service->header}}</h2>
                </div>
                <div class="col-md-12">
                    <p class="no-margin">{!! $service->description !!}</p>
                </div>

            </div>
        </div>
    </section>
@endsection