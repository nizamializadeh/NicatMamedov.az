@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($galleries as $gallery)
        <tr>
            <td>{{$gallery->id}}</td>
            <td>{{$gallery->name}}</td>
            <td>
                <form action="{{route('faq.destroy',['faq' => $gallery->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('faq.edit',['faq' => $gallery->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent