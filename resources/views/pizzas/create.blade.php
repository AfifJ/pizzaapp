@extends('layouts.app')
 
@section('content')
<div>
  <h1 class="text-xl font-semibold">Add a new pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <div>
      <label for="name">Your name</label>
      <input type="text" name="name" id="name">
    </div>

    <div>
      <label for="type">
        Choose pizza type:
      </label>
      <select name="type" id="type">
        <option value="margarita">Margarita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">Veg Supreme</option>
        <option value="volcano">Volcano</option>
      </select>
    </div>
      
    <div>
    <label for="base">
      Choose base type:
    </label>
    <select name="base" id="base">
      <option value="cheesy crust">Cheesy Crust</option>
      <option value="garlic crust">Garlic Crust</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="thick">Thick</option>
    </select>
  </div>

  <fieldset>
    <label>Extra toppings:</label><br>
    <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
    <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
    <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
    <input type="checkbox" name="toppings[]" value="olives"> Olives <br>

  </fieldset>

    <button type="submit">Order</button>
  </form>
</div>
  
@endsection
  
