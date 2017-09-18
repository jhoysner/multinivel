@extends('layouts.app')

@section('content')
    <side-nav user="{{ json_encode(Auth::user()) }}"></side-nav>
@endsection