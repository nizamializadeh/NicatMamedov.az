@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('gallery.update',['gallery' => $gallery->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">

                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$gallery->image)}}">
                        </label>
                    </div>
                </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <select class="form-control custom-select-value" name="cate_id">
                        @foreach($categories as $category)
                            <option {{($gallery->cate_id == $category->id) ? "selected" : ""}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


                <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Gallery</button>
                </div>
            </div>

        </div>
    </form>
    <hr>




@endcomponent