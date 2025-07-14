@extends('layouts.landing');

@section('title', 'Home')

@section('content')
    <h1>Services</h1>
    @component('components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem it syb')
    @endcomponent
@endsection