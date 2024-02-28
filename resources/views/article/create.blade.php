<x-layout>
        {{-- Validazioni --}}
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- fine validazioni --}}
    
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1>Inserisci un articolo</h1>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6  border rounded shadow  py-4 px-5">
                <form method="POST" action={{route('article_store')}}>
                    @csrf
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Titolo</label>
                        <input name="title" type="Name" class="form-control" placeholder="Inserisci Titolo" id="inputTitle" aria-describedby="NameHelp">
                      </div>
                    <div class="mb-3">
                      <label for="inputDescription" class="form-label">Descrizione</label>
                      <input name="description" type="text" class="form-control" placeholder="Inserisci Descrizione" id="inputDescription" aria-describedby="DescriptionHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Inputprice" class="form-label">Prezzo</label>
                      <input name="price" type="text" placeholder="Inserisci prezzo" class="form-control" id="inputprice">
                    </div>
                    <div class="mb-3">
                        <label for="inputCategory" class="form-label">Categoria</label>
                        <select name="category_id" id="inputCategory" class="form-control">
                            <option value="">Seleziona una categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"><p>{{ $category->category }}</p></option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
</x-layout>