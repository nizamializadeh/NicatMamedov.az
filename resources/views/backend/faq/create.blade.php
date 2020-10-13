@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('faq.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <select name="cate_id" id="">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="header" type="text" required class="form-control">
                        <label class="form-label">Header</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <textarea name="description" id="tinymce" aria-hidden="true"> </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create Faq</button>
                </div>
            </div>
    </form>
@endcomponent