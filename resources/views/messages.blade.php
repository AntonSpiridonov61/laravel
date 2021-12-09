@extends('layouts/app')


@section('title')
    Главная страница
@endsection 

@section('content')
    <h1>Все записи</h1>
    @foreach($data as $item)
        <div>
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->email }}</p>
            <p><small>{{ $item->created_at }}</small></p>
        </div>
    @endforeach
@endsection