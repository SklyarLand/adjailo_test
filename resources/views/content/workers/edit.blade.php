@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/companies.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1>Новая Компания</h1>
        <hr>
        <form action="{{url("workers/$worker->id")}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-lg-4 container">
                <div class="container mt-20">
                    <label for="name">Фамилия:</label>
                    <input name="name" type="text" size="50" required value="{{ $worker->name }}">
                </div>
                <div class="container mt-20">
                    <label for="surname">Имя:</label>
                    <input name="surname" type="text" size="50" required value="{{ $worker->surname }}">
                </div>
                <div class="container mt-20">
                    <label for="patronymic">Отчество:</label>
                    <input name="patronymic" type="text" size="50" required value="{{ $worker->patronymic }}">
                </div>
                <div class="container mt-20">
                    <label for="email">E-mail адрес:</label>
                    <input name="email" type="email" size="50" required value="{{ $worker->email }}">
                </div>
                <div class="container mt-20">
                    <label for="company_id">Компания:</label>
                    <select name="company_id" id="company" required>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}"
                                @if($company->id === $worker->company->id)
                                    selected
                                @endif
                            >{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-20">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        <div class="container mt-20">
            <a href="{{url("workers/$worker->id")}}">
                <button type="button" class="btn btn-dark">Список Работников</button>
            </a>
        </div>
    </div>
@endsection
