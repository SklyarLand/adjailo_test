@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-danger" role="alert">
            <h1>Ошибка!</h1>
            <p>{{ $message }}</p>
        </div>
        <a href="{{ $back_url }}">
            <button type="button" class="btn btn-dark">< Назад</button>
        </a>
    </div>
@endsection
