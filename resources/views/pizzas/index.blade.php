
       @extends('layouts.app')
       @section('content')
       
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza Orders
                </div>
     <!-- 这里传入了一在地址里输入的name和age值 -->
                <p> {{ $name }}  {{ $age }}</p>
                
                @foreach($pizzas as $pizza)
                <div>
                <!-- 这是对于数组内容的指定方法 $pizza['name'] -->
                   <!--  {{ $loop -> index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} -->
                  <!--   @if($loop -> first)
                     <span> - first in the loop</span>
                    @endif
                    @if($loop -> last)
                     <span> - last in the loop</span>
                    @endif -->

                    <!-- //使用model遍历数据库以后，数组变为了对象 ，这是对于对象的数值指定方法 -->
                  <h3> <a href="/pizza/{{ $pizza -> id }}"> {{ $pizza -> name }} </a> </h3>
                </div>
                @endforeach
          
            </div>
        </div>
  










        
        @endsection