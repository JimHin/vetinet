@extends('shop')
@section('content')
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('products/'.$product['product_main_photo']) }}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading">{{ $product['product_name'] }}</h1>
                    <h5>29.00 €</h5>
                    <p class="lead text-muted">{{ $product['product_description'] }}</p>
                    <hr>
                    <label for="size">Choisissez votre taille</label>
                    <select name="size" id="size" class="form-control">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                    <p>
                        <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </p>

                </div>
            </div>
        </div>


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3>Vous aimerez aussi :</h3>
                </div>
                    <div class="row">
                        <?php $flag = 0;?>
                        @foreach($products as $value)
                            @if($value->id != $product->id && $value->category_id == $product->category_id && $flag < 3)
                                <?php
                                    $flag++
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img src="{{asset('products/'.$value->product_main_photo)}}" class="card-img-top img-fluid" alt="Responsive image">

                                        <div class="card-body">
                                            <div class="d-flex justify-content-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('see_product',['id'=>$value->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
