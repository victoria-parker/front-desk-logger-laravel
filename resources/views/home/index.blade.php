@extends('layouts.app-master')

@section('content')
    Welcome {{ucwords(auth()->user()->name)}}
    <a href="/logout">logout</a>
@endsection
