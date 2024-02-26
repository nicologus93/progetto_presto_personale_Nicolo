<x-layout>
    {{-- Validazioni --}}
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- fine validazioni --}}

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica l' articolo{{$article->title}}</h1>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6  border rounded shadow  py-4 px-5">
            <form method="POST" action={{route('article_update', $article)}}>
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Modifica titolo</label>
                    <input name="title" type="Name" class="form-control" placeholder="Inserisci Titolo" id="inputTitle" aria-describedby="NameHelp">
                  </div>
                <div class="mb-3">
                  <label for="inputDescription" class="form-label">Modifica descrizione</label>
                  <input name="description" type="text" class="form-control" placeholder="Inserisci Descrizione" id="inputDescription" aria-describedby="DescriptionHelp">
                </div>
                <div class="mb-3">
                  <label for="Inputprice" class="form-label">Modifica prezzo</label>
                  <input name="price" type="text" placeholder="Inserisci prezzo" class="form-control" id="inputprice">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
</x-layout>