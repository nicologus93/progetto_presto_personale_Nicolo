<x-layout>
        <div class="container header d-flex align-items-center justify-content-end flex-column">
            <div class="row mx-3 justify-content-end align-items-center ">
                <div class="col-6 d-flex justify-content-center flex-column">
                    <h1 class="display-2 fw-bold">PrEsTo.it</h1>
                    <p class="fs-3">Rivoluziona il tuo shopping: esperienza, qualità e stile a portata di clic!</p>
                </div>
                <div class="col-6 d-flex align-items-end justify-content-center ">
                    <img src="storage\immagineHeader.png" alt="">
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
        <h2 class="text-center my-5">Articoli recenti</h2>

        {{-- Sezione chi siamo --}}
        <div class="container py-5 d-flex ">
            <div class="row justify-content-center">
                <div class="col-6 d-flex align-items-center ">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur iure blanditiis, rem enim deserunt quaerat dignissimos harum quod. Similique, consequuntur. Fuga harum reprehenderit expedita quasi animi! Dolorem dolores sint incidunt.</p>
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
    
   
