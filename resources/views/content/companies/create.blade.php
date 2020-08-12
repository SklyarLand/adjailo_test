@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Новая Компания</h1>
        <hr>
        <form action="{{url('companies')}}" method="POST">
            @csrf
            <div class="col-lg-6 container">
                <div class="container mt-20">
                    <label for="name">Название компании</label>
                    <input name="name" type="text" size="50" required>
                </div>
                <div class="mt-20">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        <a href="{{url('companies')}}" class="mt-20">
            <button type="button" class="btn btn-dark">Список компаний</button>
        </a>
    </div>
@endsection
