@foreach (config('languaje') as $lang)
@if ($lang != App::getLocale())

    <a href="#{{route('languaje', $lang)}}">{{strtoupper($lang)}}</a>
    
    
@endif
    
@endforeach