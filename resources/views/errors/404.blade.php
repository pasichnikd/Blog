@extends('layouts.layout', ['title' => "404 ошибка"])

@section('content')
    <div class="col-12">
        <h2 align="center">404 ошибка</h2>
        <p align="center">
            <img src="{{ asset('img/404.jpg') }}" alt="404">
        </p>
    </div>
@endsection

