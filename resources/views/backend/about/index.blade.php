@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($aboutones as $aboutone)
        <tr>
            <td>{{$aboutone->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$aboutone->image)}}"></td>
            <td>{{$aboutone->header}}</td>
            <td>{!!  $aboutone->description!!}</td>
            <td>

                <form action="{{route('about.destroy',['about' => $aboutone->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('about.edit',['about' => $aboutone->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent