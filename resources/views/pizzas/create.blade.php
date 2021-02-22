@extends('layouts.app')
@section('content') 
<h2>Make your Order</h2>
 <form action="/pizza" method="POST" name="post提交">
 @csrf
      <p>name: <input type="text" name="name"></p>
      <p>type: 
        <!-- 这里的type指的是在数据表中的属性名 -->
      <select name="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">hawaiian</option>
      <option value="veg supreme">veg supreme</option>
      <option value="volcano">volcano</option>
      </select>
      </p>

      <p>base: 
      <select name="base">
      <option value="cheesy crust">cheesy crust</option>
      <option value="garlic crust">garlic crust</option>
      <option value="thin & crispy">thin & crispy</option>
      <option value="thick">thick</option>
      </select>
      </p>

      <fieldset>
    <legend>Toppings</legend>
    <!-- 这里的name属性里要加【】，为了将key以数组形式存入 -->
   <input type="checkbox" name="toppings[]" value="mushrooms"/>Mushrooms <br />
   <input type="checkbox" name="toppings[]" value="peppers"/>Peppers <br />
   <input type="checkbox" name="toppings[]" value="garlic"/>Garlic <br />
   <input type="checkbox" name="toppings[]" value="olives"/>Olives <br />
  </fieldset>

      <input type="submit" value="提交">
      <br />
      <br />
      <br />
      <div><a href="/">Main Page</a></div>
      
    </form>



<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Used Space</p>
                  <h3 class="card-title">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>





@endsection