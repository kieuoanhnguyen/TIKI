@extends('layouts.account_nav',['url'=>'admin'])

@section('content')
<div class="d-flex flex-row">
        <div class="col-3">
            <ul class="list-group" id="menu">
                <li href="#" class="list-group-item menu1 active">
                    Menu
                </li>
                <div class="menu">
                      <li href="#" class="list-group-item menu1">
                    <a href="#">Quản lí</a>
                </li>
                <ul>
                    <li class="list-group-item">
                    <a href="{{route('products.index')}}">Sản phẩm</a>
                    </li>
                </ul>
                </div>

            </ul>
        </div>
        <!-- slider -->
        <div class="col-9">
            
        <div class="container">
            @yield('description')
        </div>
    </div>
    </div>
@endsection