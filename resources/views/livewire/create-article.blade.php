<div>
    <form wire:submit.prevent = "store">
        @csrf
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titolo</label>
            <input wire:model="title" type="Name" class="form-control" placeholder="Inserisci Titolo" id="inputTitle" aria-describedby="NameHelp">
            @error('title') <span class="error">{{ $message }}</span> @enderror
          </div>
        <div class="mb-3">
          <label for="inputDescription" class="form-label">Descrizione</label>
          <input wire:model="description" type="text" class="form-control" placeholder="Inserisci Descrizione" id="inputDescription" aria-describedby="DescriptionHelp">
          @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="Inputprice" class="form-label ">Prezzo</label>
          <input wire:model="price" type="text" placeholder="Inserisci prezzo" class="form-control" id="inputprice">
          @error('price') <span class="error">{{ $message }}</span> @enderror
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
        <div>
          <input wire:model="temporary_images" type="file" name="images" multiple class="form-control" @error ('temporary_images.*') is invalid @enderror placeholder="img">
          @error('temporary_images.*')
          <p class="text-danger mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="text-center my-4">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>  
        @if (!empty($images))
        <div class="row">
          <div class="col-12">
            <p>Photo preview</p>
            <div class="row border border-4 border-info rounded shadow py-4">
              @foreach($images as $key => $image)
                <div class="col-12 my-3">
                  <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});" ></div>
                  <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto"wire:click="removeImage({{$key}})">Cancella</button>
                </div>
              @endforeach
            </div>
          </div>
        </div>
            
        @endif
              
      </form>
</div>
