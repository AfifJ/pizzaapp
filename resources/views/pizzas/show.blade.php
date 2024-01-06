@extends('layouts.app')
 
@section('content')
<div>
  <h1 class="text-xl font-semibold">Pizza Detail</h1>
 <h1>Order for {{$pizza->name}} </h1> 
 <p>Type - {{ $pizza->type }}</p>
 <p>Base - {{ $pizza->base }}</p>
 <p>Extra toppings:</p>
  <ul>
    @foreach ($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
    @endforeach
  </ul>
</div>
<form action="/pizzas/{{$pizza->id}}" method="POST">
  @csrf
  @method('DELETE')
<button>Cemplete order</button>
</form>
<a href="{{route('pizzas.index')}}">Back to all pizzas</a>
  
  
@endsection
  
