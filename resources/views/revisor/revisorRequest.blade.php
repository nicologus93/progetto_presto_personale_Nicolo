<x-layout>
    {{-- Validazioni --}}
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- fine validazioni --}}

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Ciao vuoi lavorare con noi?</h1>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6  border rounded shadow  py-4 px-5">
            <form method="POST" action={{route('become_revisor')}}>
                @csrf
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nome</label>
                    <input name="Name" type="Name" class="form-control" placeholder="Inserisci il tuo Nome" id="inputName" aria-describedby="NameHelp">
                  </div>
                <div class="mb-3">
                  <label for="inputMessage" class="form-label">Messaggio</label>
                  <input name="message" type="text" class="form-control" placeholder="Perche' vuoi diventare revisore?" id="inputMessage" aria-describedby="DescriptionHelp">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
              </form>
        </div>
    </div>
</div>
</x-layout>