@extends('layouts.frontend.frontend')
@section('content')










    <section style="padding: 100px 0px;">

    </section>

    <section class="section-padding grid-news-hover grid-blog">
        <div class="container">
            <div class="row">
                <div id="blogGrid">

                    @foreach($blogs as $blog)
                        <div class="col-xs-12 col-sm-6 col-md-6 blog-grid-item">
                            <article class="post-wrapper">
                                <div class="thumb-wrapper waves-effect waves-block waves-light">
                                    <a href="{{ route('blogsingle', $blog->id) }}"><img src="{{asset('photo/'.$blog->image)}}" class="img-responsive" alt=""></a>

                                </div>
                                <div class="blog-content">
                                    <div class="hover-overlay light-blue"></div>
                                    <header class="entry-header-wrapper">
                                        <div class="entry-header">
                                            <h2 class="entry-title"><a href="#">{{$blog->header}}</a></h2>

                                        </div>
                                    </header>
                                    <div class="entry-content">

                                        <p> {!! Str::words($blog->description,10, '...')!!}</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                    @endforeach
                </div>
            </div>

        </div>
    </section>



@endsection