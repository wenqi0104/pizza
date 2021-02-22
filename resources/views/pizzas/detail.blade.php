
      @extends('layouts.app')
       @section('content')
       
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza Detail - {{ $idA }}
                </div>

                <div>
                <h3>Order for  {{ $pizzaA -> name}} </h1>
                <p class="type：">Type: {{ $pizzaA -> type}}</p>
                <p class="base：">Base: {{ $pizzaA -> base}}</p>

                  <ul>
                <!-- 这里的topping是数据表里的属性名 -->
                @foreach($pizzaA -> topping as $toppings)
                <li>{{ $toppings }}</li>
                @endforeach
                </ul>

                </div>


                <!-- <form action="  /pizza/{{ $pizzaA -> id }}" method="POST"> -->
                <form action="{{ route('pizza.destroy', $pizzaA -> id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
                </form>

              
                <a href="/pizza" class="back"> Go back</a>

             
          
            </div>
        </div>
  
        @endsection