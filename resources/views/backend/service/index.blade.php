@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($services as $service)

        <tr>
            <td>{{$service->id}}</td>

            <td>       <i class="{{$service->icon}}"></i></td>



            <td>{{$service->header}}</td>
            <td>{!! $service->description !!}</td>
            <td>
                <form action="{{route('service.destroy',['service' => $service->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('service.edit',['service' => $service->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent