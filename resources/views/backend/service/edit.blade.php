@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('service.update',['service' => $service->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">



                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="icon" type="text" required class="form-control" value="{{$service->icon}}">
                            <label class="form-label">Icon</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" type="text" required class="form-control" value="{{$service->header}}">
                            <label class="form-label">Header</label>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="description" id="tinymce" aria-hidden="true">{{$service->description}} </textarea>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit service</button>
                </div>
            </div>

        </div>
    </form>
    <hr>




@endcomponent