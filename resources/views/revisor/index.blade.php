<x-layout>
    <div class="container p-5 bg-gradient rounded bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{$article_to_check ? 'Ecco l\'annuncio da revsionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>

    @if($article_to_check)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                  @if($article_to_check->images)
                    <div class="carousel-inner ">
                      @foreach($article_to_check->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                          <img src="{{Storage::url($image->path)}}" class="img-fluid rounded p-3" alt="">
                        </div>
                      @endforeach
                    </div>
                @else
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://picsum.photos/200/300" class="d-block w-100 " alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://picsum.photos/200/300" class="d-block w-100 " alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200/300" class="d-block w-100 " alt="...">
                      </div>
                    </div>
                  @endif
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <h5 class="card-title">Titolo: {{$article_to_check->title}}</h5>
                  <p class="card-text">Descrizione: {{$article_to_check->description}}</p>
                  <p class="card-footer">Pubblicato il: {{$article_to_check->created_at}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor_accept_article',['article'=>$article_to_check])}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('revisor_reject_article',['article'=>$article_to_check])}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    @endif
</x-layout>