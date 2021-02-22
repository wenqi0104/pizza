<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

    public function welcome(){
        return view('pizzas.welcome');
    }

    public function mainview(){
        $pizzas = Pizza::all();
         //把word赋值，然后在view里使用
         // ‘;’很重要 
    /*      $pizzas = [
        ['type' => 'Chinese', 'base' => 'cheey crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme','base' => 'thin & crispy']
    ]; */
//request方法用于传地址里变量数值  记得加‘？’
    $name = request('name');
    $age = request('age');

    return view('pizzas.index',[
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => $age,
    ]);
    }


    //只传id的方法
   /*  public function showDetails($id){   
          return view('pizzas.detail',['id' => $id]);
    } */


    //通过传入地址的id打印出对应的信息
    public function showDetails($id){
        $pizza = Pizza::findOrFail($id);
        //将pizzA所对应的内容传入view模板中
         return view('pizzas.detail',['pizzaA' => $pizza, 'idA' => $id]);
    }

    public function create(){
        return view('pizzas.create');
        
    }

    public function store(){
     
       $pizza = new Pizza();
       //前面的name 表示数据表中的属性名， 后面的键表示view模板中的name
       $pizza -> name = request('name');
       $pizza -> type = request('type');
       $pizza -> base = request('base');
       $pizza -> topping = request('toppings');
       $pizza -> save();
       //订单成功后在主页返回成功预定消息
        return redirect('/') -> with('mssg', 'Thanks for ordering');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza -> delete();
        return redirect('/pizza');

    }


}
