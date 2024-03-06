<x-layout>
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
  <h1>tutti gli articoli</h1>
  <div class="container">
    <div class="row">
      @forelse ($articles as $article)
      <div class="col-4 my-3">
        <div class="card" style="width: 18rem;">
          <img src="{{$article->images()->get()->isempty() ? Storage::url($article->images()->first()->path) : 'https://picsum.photos/200/300'}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p>{{$article->category->category}}</p>
            <p class="card-text">{{$article->price}}</p>
            <a href="{{route('article_show', $article)}}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div> 
      @empty <p>Non ci sono annunci per questa categoria</p> 
      
      @endforelse
    </div>
  </div>
</x-layout>