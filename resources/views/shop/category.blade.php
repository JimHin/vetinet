@extends('shop')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active h4" aria-current="page">{{ucfirst($category->category_name)}}</li>
            @foreach($category->childrens as $category)
                <li class="breadcrumb-item active" aria-current="page">{{$category->category_name}}</li>
            @endforeach
        </ol>
    </nav>

    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img src="{{asset('products/'.$product->product_main_photo)}}" class="card-img-top img-fluid" alt="{{$product->product_name}}">
                        <div class="card-body">
                            <p class="card-text">{{$product->product_name}}<br>{{$product->product_description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{number_format($product->product_ht_price,2)}} &euro;</span>
                                <a href="{{route('see_product',['id'=>$product->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
