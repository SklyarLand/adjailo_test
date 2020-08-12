@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Компания #{{$company->id}}</h1>
        <hr>
        <div class="col-lg-6 container">
            <div>
                <label for="name">Название компании:</label>
                <input name="name" type="text" size="50" readonly value="{{ $company->name }}">
            </div>
        </div>
    </div>
    <div class="container mt-40">
        <a href="{{url('/companies')}}">
            <button type="button" class="btn btn-dark">Список компаний</button>
        </a>
        <a href="{{url("/companies/$company->id/edit")}}">
            <button type="button" class="btn btn-dark">Редактировать</button>
        </a>
        <form action="{{ url("companies/$company->id") }}" id="btn-delete" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
@endsection
