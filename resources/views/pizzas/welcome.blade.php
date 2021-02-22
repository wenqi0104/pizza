

      @extends('layouts/layout')
      @section('content') 
  
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              <img src="/img/logo.png" alt="logo.png">
                <div class="title m-b-md">
                   Pizza House
                </div>
                <!-- 使用session来显示完成以后的message，替代弹窗效果 -->
                <h2> {{ session('mssg') }}</h2>
               
            </div>
        </div>
    <div style="text-align:center;">
    <!-- <a href="/pizza/create">go and make order</a> -->
    <a href="{{ route('pizza.create')}}">go and make order</a>
    </div>
        
        @endsection
 