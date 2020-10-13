@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('faq.update',['faq' => $faq->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <select class="form-control custom-select-value" name="cate_id">
                        @foreach($categories as $category)
                            <option {{($faq->cate_id == $category->id) ? "selected" : ""}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" type="text" required class="form-control" value="{{$faq->header}}">
                            <label class="form-label">Header</label>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="description" id="tinymce" aria-hidden="true">{{$faq->description}} </textarea>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Faq</button>
                </div>
            </div>

        </div>
    </form>
    <hr>




@endcomponent