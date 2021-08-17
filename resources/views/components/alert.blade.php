<div>
    {{$slot}}
    @if(session()->has('message'))
    <!--<img {{session()->forget('message')}}> To remove session variable-->
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif
</div>