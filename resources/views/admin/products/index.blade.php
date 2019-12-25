@extends('home.sellerIndex')

@section('description')
            <h2>View Products</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hãng sản xuất</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td><img src="{{"/images/".$product->getImages()[0]}}" height="50" width="60" alt="null"> </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->count}}</td>
                    <td>{{$product->publishing}}</td>
                    <td>{{$product->auther}}</td>
                    <td>{{$product->description}}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{route('products.edit',[
                              'product'=>$product,
                            ])}}">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                        <a href="{{route('products.destroy',[
                          'product'=>$product,
                        ])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            <tr>
                <td>
                <a href="{{route('products.create')}}">
                        <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i>  Create</button>
                    </a>
                </td>
                </tr>
            </table>

            <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{$products->links()}}
                    </div>
                </div>
@endsection