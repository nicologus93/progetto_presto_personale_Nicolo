<div>
    <form wire:submit.prevent = "store">
        @csrf
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titolo</label>
            <input wire:model="title" type="Name" class="form-control" placeholder="Inserisci Titolo" id="inputTitle" aria-describedby="NameHelp">
          </div>
        <div class="mb-3">
          <label for="inputDescription" class="form-label">Descrizione</label>
          <input wire:model="description" type="text" class="form-control" placeholder="Inserisci Descrizione" id="inputDescription" aria-describedby="DescriptionHelp">
        </div>
        <div class="mb-3">
          <label for="Inputprice" class="form-label">Prezzo</label>
          <input wire:model="price" type="text" placeholder="Inserisci prezzo" class="form-control" id="inputprice">
        </div>
        <div class="mb-3">
            <label for="inputCategory" class="form-label">Categoria</label>
            <select wire:model="category_id" id="inputCategory" class="form-control">
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
