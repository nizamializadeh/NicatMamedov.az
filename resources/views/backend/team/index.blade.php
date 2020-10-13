@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($abouttwos as $abouttwo)
        <tr>
            <td>{{$abouttwo->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$abouttwo->image)}}"></td>
            <td>{{$abouttwo->name}}</td>
            <td>{{$abouttwo->specialty}}</td>
            <td>{{$abouttwo->fb}}</td>
            <td>{{$abouttwo->inst}}</td>

            <td>

                <form action="{{route('team.destroy',['team' => $abouttwo->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('team.edit',['team' => $abouttwo->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent