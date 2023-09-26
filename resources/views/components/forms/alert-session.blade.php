@if(session($status))
    <p class="{{$class}} text-white my-2 rounded-lg p-2 text-center">{{session($status)}}</p>
@endif

{{--
@if(session('success'))
    <p class="{{$class}} text-white my-2 rounded-lg p-2 text-center">{{session('success')}}</p>
@endif

@if(session('warning'))
    <p class="{{$class}} text-white my-2 rounded-lg p-2 text-center">{{session('warning')}}</p>
@endif

@if(session('error'))
    <p class="{{$class}} text-white my-2 rounded-lg p-2 text-center">{{session('error')}}</p>
@endif
--}}