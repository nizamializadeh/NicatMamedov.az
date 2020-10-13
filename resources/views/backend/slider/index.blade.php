@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($sliders as $slider)
        <tr>
            <td>{{$slider->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$slider->image)}}"></td>

            <td>
                <form action="{{route('slider.destroy',['slider' => $slider->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent