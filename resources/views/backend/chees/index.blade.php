@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($cheeses as $chees)

        <tr>
            <td>{{$chees->id}}</td>
            <td>{{$chees->nav}}</td>
            <td>{{$chees->header}}</td>
            <td>{!! $chees->description !!}</td>
            <td>
                <form action="{{route('chees.destroy',['chees' => $chees->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('chees.edit',['chees' => $chees->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent