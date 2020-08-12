@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Новая Рабочий</h1>
        <hr>
        <form action="{{url('workers')}}" method="POST">
            @csrf
            <div class="col-lg-4 container">
                <div class="container mt-20">
                    <label for="name">Фамилия:</label>
                    <input name="name" type="text" size="50" required>
                </div>
                <div class="container mt-20">
                    <label for="surname">Имя:</label>
                    <input name="surname" type="text" size="50" required>
                </div>
                <div class="container mt-20">
                    <label for="patronymic">Отчество:</label>
                    <input name="patronymic" type="text" size="50" required>
                </div>
                <div class="container mt-20">
                    <label for="email">E-mail адрес:</label>
                    <input name="email" type="email" size="50" required>
                </div>
                <div class="container mt-20">
                    <label for="company_id">Компания:</label>
                    <select name="company_id" id="company" required>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-20">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        <a href="{{url('workers')}}" class="mt-20">
            <button type="button" class="btn btn-dark">Список Рабочих</button>
        </a>
    </div>
@endsection
