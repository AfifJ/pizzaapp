@extends('layouts.app')

@section('content')
    <h1 class="text-xl font-semibold">Pizza List</h1>
    <h2>{{ session('success') }}</h2>
    @foreach ($pizzas as $pizza)
        <p>
            {{ $loop->index + 1 }}. {{ $pizza->name }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            --- <a href="/pizzas/{{$pizza->id}}">Pizza Details</a>
        </p>
    @endforeach
    <div>
        <a href="{{ route('pizzas.create') }}">Order a pizza</a>
    </div>
@endsection
