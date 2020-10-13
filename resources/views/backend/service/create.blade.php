@component('backend.components.form',$settings)
    {{-- Component content--}}

    <div class="col-md-12"><a target="_blank" href="https://fontawesome.com/icons?d=gallery">Icons gallery</a></div>

    <form id="form_validation" action="{{route('service.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="icon" type="text" required class="form-control">
                        <label class="form-label">Icon</label>
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
                    <button type="submit" class="btn btn-success waves-effect right">Create service</button>
                </div>
            </div>
    </form>
@endcomponent