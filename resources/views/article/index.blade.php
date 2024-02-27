<x-layout>
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
  <h1>tutti gli articoli</h1>
  <div class="container">
    <div class="row">
      @foreach ($articles as $article)
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{{$article->description}}</p>
            <p class="card-text">{{$article->price}}</p>
            <p>Creato da: <h5>{{$article->user->name}}</h5></p>
            <p>{{$article->created_at}}</p>
            <a href="{{route('article_show', $article)}}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>  
      @endforeach
    </div>
  </div>
</x-layout>