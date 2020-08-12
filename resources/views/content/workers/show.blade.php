@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ID работника: {{ $worker->id }}</h1>
        <hr>
        <div class="col-lg-4 container">
            <div class="container mt-20">
                <label for="name">Фамилия:</label>
                <input name="name" type="text" size="50" value="{{ $worker->name }}" readonly>
            </div>
            <div class="container mt-20">
                <label for="surname">Имя:</label>
                <input name="surname" type="text"  size="50" value="{{ $worker->surname }}" readonly>
            </div>
            <div class="container mt-20">
                <label for="patronymic">Отчество:</label>
                <input name="patronymic" type="text" size="50" value="{{ $worker->patronymic }}" readonly>
            </div>
            <div class="container mt-20">
                <label for="email">E-mail адрес:</label>
                <input name="email" type="email" size="50" value="{{ $worker->email }}" readonly>
            </div>
            <div class="container mt-20">
                <label for="company">E-mail адрес:</label>
                <input name="company" type="text" size="50" value="{{ $worker->company->name }}" readonly>
            </div>
        </div>
    </div>
    <div class="container mt-20">
        <a href="{{ url('/workers') }}">
            <button type="button" class="btn btn-dark">Список работников</button>
        </a>
        <a href="{{ url("/workers/$worker->id/edit") }}">
            <button type="button" class="btn btn-dark">Редактировать</button>
        </a>
    </div>
@endsection
