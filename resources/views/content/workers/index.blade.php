@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список Компаний</h1>
        <div id="table" class='container'>
            <div class="row text-light table-header">
                <div class="col-md-1 bg-dark">#</div>
                <div class="col-md-5 bg-dark">ФИО</div>
                <div class="col-md-3 bg-dark">Компания</div>
            </div>
            @foreach ($workers as $worker)
                <a href="{{ url("workers/$worker->id") }}">
                    <div class="row task-row">
                        <div class="col-md-1 border">{{ $worker->id }}</div>
                        <div class="col-md-5 border">{{ $worker->fio }}</div>
                        <div class="col-md-3 border">{{ $worker->company->name }}</div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="container mt-20">
            <div class="row d-flex justify-content-between">
                <a href="{{url('workers/create')}}">
                    <button type="button" class="btn btn-primary">Добавить Рабочего</button>
                </a>
            </div>
        </div>
    </div>
@endsection
