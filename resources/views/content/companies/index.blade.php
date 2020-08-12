@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список Компаний</h1>
        <div id="table" class='container'>
            <div class="row text-light table-header">
                <div class="col-md-1 bg-dark">#</div>
                <div class="col-md-3 bg-dark">Название</div>
            </div>
            @foreach ($companies as $company)
                <a href="{{ url("companies/$company->id") }}">
                    <div class="row task-row">
                        <div class="col-md-1 border">{{ $company->id }}</div>
                        <div class="col-md-3 border">{{ $company->name }}</div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="container mt-20">
            <div class="row d-flex justify-content-between">
                <a href="{{url('companies/create')}}">
                    <button type="button" class="btn btn-primary">Добавить Компанию</button>
                </a>
            </div>
        </div>
    </div>
@endsection
