<div class="container-fluid footer">
    <div class="row">
        <div class="col-2">
            <ul>
                <p class="fw-bold">Informazioni</p>
                <li>Chi siamo</li>
                <li>Privacy</li>
                <li>Sedi</li>
                <li class="d-flex align-items-center"><a href="{{route('contactUs')}}">Contattaci</a></li>

            </ul>
        </div>
        <div class="col-2">
            <p class="fw-bold">Cerchi lavoro?</p>
            <ul class="p-0 text-center">
                <li>Metodi di lavoro</li>
                <li>Formazione</li>
                @if(!Auth::user()->is_revisor)
                <a href="{{route('revisorRequest')}}" class="btn btn-warning text-center my-2">Lavora con noi!</a>
                @endif
            </ul>
        </div>
    </div>
    <div class="container-fluid icon-container d-flex align-items-start justify-content-end">
        <div class="row justify-content-end">
            <div class="col-4">
                <i class="fa-brands fa-square-instagram display-6 py-1" style="color: #002057;"></i>    
                <i class="fa-brands fa-facebook  display-6 py-1" style="color: #002057;"></i>
                <i class="fa-brands fa-tiktok  display-6 py-1" style="color: #002057;"></i>
                <i class="fa-brands fa-linkedin  display-6 py-1" style="color: #002057;"></i>
            </div>
        </div>
    </div>
</div>  
            