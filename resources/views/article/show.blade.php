<x-layout>

    <h1>Dettaglio {{$article->title}}</h1>

    <a href="{{route('article_index')}}" class="btn btn-primary" >Torna indietro</a>
    <a href="{{route('article_edit', $article)}}" class="btn btn-warning" >Modifica</a>
    <a onclick="event.preventDefault(); document.querySelector('#form-delete').submit()" class="btn btn-danger" >Elimina</a>
    <form id="form-delete" class="d-none" method="POST" action="{{route('article_destroy', $article)}}"> 
        @method('delete')
        @csrf
    </form>

</x-layout>