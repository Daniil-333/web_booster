@extends('layouts.layout')

@section('title')
@parent Оптовые поставки электронных компонентов | из Китая день в день
@endsection

@section('content')
    <main class="main">
        @include('main.promo')
        @include('main.how')
        @include('main.manufactured')
        @include('main.scheme')
        @include('main.faq')
    </main>
@endsection
