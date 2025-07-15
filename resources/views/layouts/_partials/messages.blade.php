@if ( $message =  Session::get('sucess'))
<div style="padding: 15px; background-color:green; color:white;">
    <p>{{$message}}</p>

</div>
    
@endif

@if ( $message =  Session::get('danger'))
<div style="padding: 15px; background-color:blue; color:white;">
    <p>{{$message}}</p>

</div>
    
@endif