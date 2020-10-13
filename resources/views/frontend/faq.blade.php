@extends('layouts.frontend.frontend')
@section('content')




    <section style="padding: 100px 0px;">

    </section>



    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-capitalize">Frequently asked questions</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->



            <div class="container-fluid inner-container" >



@foreach($types as $type)
                    <div class="col-md-6">
                        <h1 style="
    font-size: 20px;
    font-family: raleway,sans-serif!important;
    font-weight: 400;
    color: #202020;
    /* margin: 0 0 15px */
    padding: 5px 23px;
    " class="main-heading">{{$type->name}}</h1>
                        <div class="about-page-content testimonial-page">
                            <div class="faq-content">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    {{--<div class="panel panel-default">--}}
                                        {{--<div class="panel-heading" role="tab">--}}
                                            {{--<h4 class="panel-title">--}}
                                                {{--<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq1">--}}
                                                    {{--<span>What is Manage Booking?</span>--}}
                                                {{--</a>--}}
                                            {{--</h4>--}}
                                        {{--</div>--}}
                                        {{--<div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                                            {{--<div class="panel-body">--}}
                                                {{--Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur adipis neque, bibendum in sagittis. Duis varius tellus eget massa. Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur adipis neque, bibendum in sagittis. Duis varius tellus eget massa. Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur adipis neque,varius tellus eget massa. Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur adipis neque, bibendum in sagittis. Duis varius tellus eget massa. Quis autem velum iure reprehe nderit.--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    @foreach($type->faqs as $typ)
                                        <div class="panel panel-default" style="border: none">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title" style="padding: 5px 22px;">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq{{$typ->id}}">
                                                        <span>{{$typ->header}}</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq{{$typ->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body" style="border: none">
                                                    {!! $typ->description !!}
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    {{--@foreach($faqs as $faq)--}}
        {{--@endforeach--}}


    <style>
        .faq-content #accordion .panel-title > a.accordion-toggle::before, .faq-content #accordion a[data-toggle="collapse"]::before  {
            /*content:"−";*/
            float: left;
            font-family: 'Glyphicons Halflings';
            margin-right :1em;
            margin-left:10px;
            color:#fff;
            font-size:13px;
            font-weight:300;
            display:inline-block;
            width:20px;
            height:20px;
            line-height:20px;

            border-radius:50%;
            text-align:center;
            font-size:10px;
            background:#ff990021;
        }
        .faq-content #accordion .panel-title > a.accordion-toggle.collapsed::before, .faq-content  #accordion a.collapsed[data-toggle="collapse"]::before  {
            /*content:"+";*/
            color:#fff;
            font-size:10px;
            font-weight:300;
            background:#ff990021;
        }

        .faq-content{float:left; width:100%;}
        .faq-content .panel-heading{padding-left:0px; border-radius:0px !important;}
        .faq-content .panel-heading a{text-decoration:none;}
        .faq-content .panel{border-radius:0px !important;}
        .faq-content .panel-default{}
        .faq-content .panel-heading{background:#ffffff !important; color:#03a9f4;}

        .faq-content .panel-body{font-size:14px; color:#666666;}
        .faq-saelect{background:#f3f3f3; padding:15px; border-bottom:2px solid #666666; float:left; width:100%; margin-bottom:20px; margin-top:-10px;}
        .faq-saelect span{font-size:16px; color:#333; margin-right:20px;}
        .faq-saelect select{border:1px solid #dcdcdc; color:#999999; width:300px; height:40px;}
        .faq-content .panel{border-top:none !important; border-right:none !important; border-left:none !important;}
        .faq-content .panel-body{border:1px solid #f3f3f3;}
    </style>





@endsection