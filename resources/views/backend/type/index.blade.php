@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>

                <form action="{{route('type.destroy',['type' => $type->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('type.edit',['type' => $type->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent