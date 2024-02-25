<x-layout>
    {{-- Validazioni --}}
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- fine validazioni --}}

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Ciao, Registrati!</h1>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6  border rounded shadow  py-4 px-5">
            <form method="POST" action={{route('register')}}>
                @csrf
                <div class="mb-3">
                    <label for="inputName" class="form-label">Name</label>
                    <input name="name" type="Name" class="form-control" placeholder="Inserisci Nome" id="inputName" aria-describedby="NameHelp">
                    <div id="NameHelp" class="form-text"></div>
                  </div>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" placeholder="Inserisci Email" id="inputEmail" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Password</label>
                  <input name="password" type="password" placeholder="Inserisci Password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="InputPassword_confirmation" class="form-label">Conferma Password</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Conferma Password" id="inputPasswordConfirmation">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
</x-layout>