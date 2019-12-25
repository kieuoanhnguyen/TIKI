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
                    <a href="#">Thể loại</a>
                </li>
                <ul>
                    <li class="list-group-item">
                        <a href="/admin/categories">Xem tất cả</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/categories/create">Thêm mới </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Xóa thể loại </a>
                    </li>
                </ul>
                </div>

                <div class="menu">
                <li href="#" class="list-group-item menu1">
                    <a href="#">Manage</a>
                </li>
                <ul>
                    <li class="list-group-item">
                        <a href="/admin/accounts">Admin</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/shippers">Shipper</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/employees">Employee </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/warehouses">Ware House</a>
                    </li>
                </ul>
                </div>
    
                <div class="menu">
                <li href="#" class="list-group-item menu1">
                    <a href="#">Người bán</a>
                </li>
    
                <ul>
                    <li class="list-group-item">
                        <a href="/admin/sellers">Xem tất cả người bán</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Xóa người bán</a>
                    </li>
    
                </ul>
                </div> 

                <div class="menu">
                <li href="#" class="list-group-item menu1">
                    <a href="#">Người dùng</a>
                </li>
                <ul>
                    <li class="list-group-item">
                        <a href="/admin/users">Xem người dùng</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Xóa người dùng</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Chặn người dùng</a>
                    </li>
                </ul>
                </div>

                <div class="menu">
                <li href="#" class="list-group-item menu1">
                    <a href="#">Sản phẩm</a>
                </li>
                <ul>
                <li class="list-group-item menu1">
                    <a href="/admin/products">Xem sản phẩm</a>
                </li>
                <li href="#" class="list-group-item menu1">
                    <a href="#">Xóa sản phẩm</a>
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