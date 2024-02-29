<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
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
    
</style>
</head>

<body>
    <!-- Swiper -->
    <section class="" > 
    <div class="container  swiper-container">
        <div class="row justify-content-end">
            <div class="col-6">
                <h2 class="text-center my-5">Articoli recenti</h2>
                <div class="swiper mySwiper  px-2 ">
                    <div class="swiper-wrapper">            
                        @foreach ($articles as $article)
                        <div class="swiper-slide p-2 my-2">
                            <div class="d-flex justify-content-start">
                            <img src="https://picsum.photos/200/300" class="swiper-img-top" alt="...">
                            </div>
                            <div class="">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <span class="swiper-description"><p class="card-text fw-light ">{{ $article->description }}</p></span>
                                <div class="">                                        
                                    <p>Creato da: <span class="display-7 fw-bold">{{ $article->user->name }}</span></p>
                                    <p>In data: <span class="fs-6 fw-lighter">{{ $article->created_at }}</span></p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('article_show', $article) }}" role="button" class="button-15">Dettaglio</a>
                                </div>                                
                            </div>                            
                        </div>
                        @endforeach
                    </div>                            
                </div>
            </div>                
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

{{-- Sezione chi siamo --}}
<div class="container py-5 d-flex ">
    <div class="row justify-content-center">
        <div class="col-6 d-flex align-items-center ">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur iure blanditiis, rem enim
                deserunt quaerat dignissimos harum quod. Similique, consequuntur. Fuga harum reprehenderit
                expedita quasi animi! Dolorem dolores sint incidunt.</p>
            </div>
            <div class="col-6 d-flex justify-content-evenly ">
                <img class="img-section-chi-siamo" src="storage\pizza2.jpg" alt="">
            </div>
        </div>
    </div>
    
    {{-- card --}}
    <section class="container cards-container d-flex flex-column justify-items-center py-3">
        <div class="container d-flex justify-content-end ">
            <div class="row align-items-center justify-content-end ">
                <div class="col-5 me-5 px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
                <div class="col-3  px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
                <div class="col-3  px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-end mt-2 ">
            <div class="row align-items-center justify-content-end ">
                <div class="col-5 me-5 px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
                <div class="col-3  px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
                <div class="col-3  px-1 pt-1">
                    <img class="card-img-top" src="storage\pizza2.jpg" alt="">
                    {{-- <p class="text-card">Titolo</p> --}}
                </div>
            </div>
        </div>
    </section>
    
</x-layout>
