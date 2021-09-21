<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">SWEATPOP - pour les Fans de...</h4>
                    <p class="text-white"> Nous sélectionnons pour vous, parmi les plus grandes marques, les sweat-shirt de vos séries, jeux, films ou groupes de musique préférés.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Suivez nous sur Twitter</a></li>
                        <li><a href="#" class="text-white">Likez nous sur Facebook</a></li>
                        <li><a href="#" class="text-white">Contactez Nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <i class="fas fa-tshirt"></i>
                <strong>Sweatpop</strong>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-red">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('see_by_category',['id'=>$category->id]) }}">{{ ucfirst($category->category_name) }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </nav>
</header>
