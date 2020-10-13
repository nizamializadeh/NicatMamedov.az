@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('blog.update',['blog' => $blog->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">

                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$blog->image)}}">
                        </label>
                    </div>
                </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="header" type="text" required class="form-control" value="{{$blog->header}}">
                        <label class="form-label">Header</label>
                    </div>
                </div>
            </div>

                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="description" id="tinymce" aria-hidden="true">{{$blog->description}} </textarea>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Blog</button>
                </div>
            </div>

        </div>
    </form>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
    {{--<form id="form_validation"  action="{{route('sliderupload')}}"   method="post"  enctype="multipart/form-data">--}}
        {{--@csrf--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="form-group form-float">--}}
            {{--<div class="form-line">--}}
                {{--<input name="img[]" type="file" multiple required class="form-control " >--}}
                {{--<input name="project_id" type="hidden"   class="form-control " value="{{$project->id}}" >--}}
                {{--<label  style="cursor: pointer">--}}
                    {{--images--}}
                {{--</label>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-sm-12">--}}
            {{--<div class="demo-switch">--}}
                {{--<button type="submit" class="btn btn-success waves-effect right">Create Image</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
</div>
    {{--<div class="col-sm-12 col-md-12 col-lg-12">--}}
    {{--@foreach($project->images as $image)--}}
        {{--<div class="col-sm-6">--}}
            {{--<div class="form-group form-float">--}}
                {{--<div class="col-sm-6">--}}
                    {{--<img  style="max-height:250px" width="150px"  class="img-responsive thumbnai" src="{{asset('photo/'.$image->img)}}">--}}
                {{--</div>--}}
                {{--<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">--}}

                    {{--<form action="{{route('sliderimg',['sliderimg' => $image->id])}}" method="post">--}}
                        {{--{{ method_field('delete') }}--}}
                        {{--@csrf--}}
                        {{--<button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">--}}
                            {{--<i class="material-icons">delete</i>--}}
                        {{--</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}



@endcomponent