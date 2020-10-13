@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('team.update',['team' => $team->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">

                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$team->image)}}">
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="name" type="text" required class="form-control" value="{{$team->name}}">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="specialty" type="text" required class="form-control" value="{{$team->specialty}}">
                            <label class="form-label">Specialty</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="fb" type="text" required class="form-control" value="{{$team->fb}}">
                            <label class="form-label">Facebook</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="inst" type="text" required class="form-control" value="{{$team->inst}}">
                            <label class="form-label">Insatagram</label>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit team</button>
                </div>
            </div>

        </div>
    </form>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">

</div>




@endcomponent