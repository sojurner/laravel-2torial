@extends('layout')
@section('title', 'Laravel: Welcome')

@section('header')
    <h1>Welcome, {{$user}}</h1>


@endsection

@section('body')
    <ul>
    @foreach($tasks as $task)
        <li><?= $task; ?></li>
    @endforeach

        </ul>

@endsection
