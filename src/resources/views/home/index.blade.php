@extends('layout')

@section('title','PageTitle')


@section('sidebar')
    @parent
    
    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')
    <p>This is my({{ $name }}) body content.</p>
@endsection
