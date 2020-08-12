@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/companies.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1>Новая Компания</h1>
        <hr>
        <form action="{{url("companies/$company->id")}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-lg-6 container">
                <div class="container mt-20">
                    <label for="name">Название компании</label>
                    <input name="name" type="text" size="50" required value="{{ $company->name }}">
                </div>
                <div class="mt-20">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        <div class="container mt-20">
            <a href="{{url("companies/$company->id")}}">
                <button type="button" class="btn btn-dark">Список компаний</button>
            </a>
        </div>
    </div>
@endsection
