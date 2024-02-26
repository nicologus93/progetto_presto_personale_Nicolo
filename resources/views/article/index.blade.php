<x-layout>
  <h1>tutti gli articoli</h1>
    @foreach ($articles as $article)
    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->description}}</p>
          <p class="card-text">{{$article->price}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      
        
    @endforeach
</x-layout>