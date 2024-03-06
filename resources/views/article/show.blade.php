<x-layout>
    <h1>Dettaglio {{$article->title}}</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
              @if($article->images)
              <div class="carousel-inner ">
                @foreach($article->images as $image)
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
            </div>
            <p>{{$article->description}}</p>
            <p>{{$article->price}}</p>
            <p>{{$article->category->category}}</p>
            <p>Data creazione {{$article->created_at}}</p>
            <p>{{$article->user->name}}</p>
        </div>
    </div>
    
    
    
    <a href="{{route('article_index')}}" class="btn btn-primary" >Torna indietro</a>
    <a href="{{route('article_edit', $article)}}" class="btn btn-warning" >Modifica</a>
    <a onclick="event.preventDefault(); document.querySelector('#form-delete').submit()" class="btn btn-danger" >Elimina</a>
    <form id="form-delete" class="d-none" method="POST" action="{{route('article_destroy', $article)}}"> 
        @method('delete')
        @csrf
    </form>
    
</x-layout>