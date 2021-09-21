@extends('base')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('products/'.$product->product_main_photo) }}" class="bd-placeholder-img card-img-top" width="100%" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                        <div class="card-body">
                            <p class="h3 card-title">{{ $product['product_name'] }}</p>
                            <p class="card-text">{{ $product['product_description'] }}<br>
                                <button type="button" class="btn btn-dark">
                                    <span class="badge badge-info">
                                        <a class="text-white" style="text-decoration: none" href="{{route('see_by_category',['id'=>$product->category->id])}}">{{ $product->category->category_name }}</a>
                                    </span>
                                </button>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{ number_format($product['product_ht_price'],2) }} &euro;</span>
                                <a href="{{ route('see_product',['id'=>$product->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
