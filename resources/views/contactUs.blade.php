<x-layout>
    {{-- Validazioni --}}
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- fine validazioni --}}

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Hai bisogno di assistenza?</h1>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6  border rounded shadow  py-4 px-5">
            <form method="POST" action={{route('contactUsSubmit')}}>
                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Email</label>
                    <input name="email" type="Name" class="form-control" placeholder="Inserisci la tua mail" id="inputTitle" aria-describedby="NameHelp">
                  </div>
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Nome</label>
                    <input name="name" type="Name" class="form-control" placeholder="Inserisci il tuo nome" id="inputTitle" aria-describedby="NameHelp">
                  </div>
                <div class="mb-3">
                  <label for="inputDescription" class="form-label">Descrivici il tuo problema</label>
                  <input name="text" type="text" class="form-control" placeholder="Inserisci Motivo di Assistenza" id="inputDescription" aria-describedby="DescriptionHelp">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>                
              </form>
        </div>
    </div>
</div>
</x-layout>