@extends('layouts.app')
 
@section('content')
  <img class="pizza-logo" src="img/pizzaapp.jpg" alt="Pizza app">
  <h1 class="text-xl font-semibold">Selamat datang</h1>

  <p class="msg">{{ session('msg') }}</p>
  
  <div>
    <a href="{{ route('pizzas.create') }}">Order a pizza</a>
  </div>
  <div>
    <a href="{{ route('pizzas.index') }}">View current pizzas</a>
  </div>
@endsection
  
