<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if (session('access.denied'))
    <div class="alert alert-danger">
        {{ session('access.denied') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- inizio header --}}
    <div class="container header d-flex align-items-center justify-content-end flex-column">
        <div class="row mx-3 justify-content-end align-items-center ">
            <div class="col-6 d-flex justify-content-center flex-column">
                <h1 class="display-2 fw-bold">PrEsTo.it</h1>
                <p class="fs-3">Rivoluziona il tuo shopping: esperienza, qualità e stile a portata di clic!</p>
            </div>
            <div class="col-6 d-flex align-items-end justify-content-center ">
                <img class="img-header" src="storage\immagineHeader2.png" alt="">
            </div>
        </div>
        <div class="row justify-content-evenly w-100 mt-5">
            <div class="col-3 fs-5 d-flex justify-content-center align-items-center  flex-column">
                <i class="fa-solid fa-truck-fast display-6" style="color: #000000;"></i>
                <p>Spedizione gratuita!</p>
            </div>
            <div class="col-3 fs-5 d-flex justify-content-center align-items-center flex-column">
                <i class="fa-solid fa-cart-arrow-down display-6" style="color: #000000;"></i>
                <p>Pagamenti sicuri!</p>
            </div>
            <div class="col-3 fs-5 d-flex justify-content-center align-items-center flex-column">
                <i class="fa-solid fa-box-open display-6" style="color: #000000;"></i>
                <p>Resi gratuiti!</p>
            </div>
            <div class="col-3 fs-5 d-flex justify-content-center align-items-center flex-column">
                <i class="fa-solid fa-wallet display-6" style="color: #000000;"></i>
                <p>Risparmi con l'usato!</p>
            </div>
        </div>
    </div>
{{-- fine header --}}

    <h2 class="text-center my-5">Articoli recenti</h2>
    <div class="container mt-5 ">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-2">
                <div class="card text-bg-dark">
                    <img src="https://picsum.photos/50/50" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->description}}</p>
                    <a href="{{ route('article_show', $article) }}" role="button" class="button-15">Dettaglio</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>
