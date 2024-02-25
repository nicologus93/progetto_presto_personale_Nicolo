<x-layout>
    {{-- Validazioni --}}
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- fine validazioni --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Ciao, Accedi!</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 border rounded shadow py-4 px-5">
                <form method="POST" action={{route('login')}}>
                    @csrf
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label ">Email</label>
                      <input name="email" type="email" class="form-control @error('title') is-invalid @enderror" id="inputEmail" placeholder="Inserisci la mail" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <label for="InputPassword" class="form-label ">Password</label>
                      <input name="password" type="password" placeholder="Inserisci la password" class="form-control @error('title') is-invalid @enderror" id="inputPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    </x-layout>