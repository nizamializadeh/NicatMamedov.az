@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('chees.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image[]" type="file" multiple  class="form-control " >
                        <label  style="cursor: pointer">
                            images
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="nav" type="text" required class="form-control">
                        <label class="form-label">Nav</label>
                    </div>
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
                    <button type="submit" class="btn btn-success waves-effect right">Create history</button>
                </div>
            </div>
    </form>
@endcomponent