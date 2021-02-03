@section('content')

    @if ($_COOKIE["tipoUsuario"] === "0")
        @php $plantilla =  'layoutSolicitante'
        @endphp
    @else
        @if ($_COOKIE["tipoTrabajador"] === "11")
            @php $plantilla =  'layoutTecnicos'
            @endphp
        @else

            @php $plantilla =  'layoutCoordinadores'
            @endphp
        @endif
    @endif


    @extends($plantilla)
<div class="row">
    <div class="col-12 py-2"><h1 class="fw-weight-bolder text-center">BIENVENIDO</h1></div>

    <div class="text-welcome col-10 col-md-6 offset-1">
        <p class="font-weight-lighter">En nombre de NUVE, les damos la más sincera bienvenida a nuestra página web, en la que, esperamos, encontrarán toda la información que necesiten acerca de nuestras actividades.</p>
        <br>
        <p class="font-weight-lighter">Esta web quiere ser también testigo del crecimiento de NUVE, desde sus orígenes hasta su incursión en aquellos sectores demandados por la sociedad.</p>
        <br>
        <p class="font-weight-lighter">Pero el objetivo principal de este canal de comunicación es plasmar los <b>valores</b> que nos respaldan: el compromiso social, la máxima calidad y la voluntad de servicio, así como nuestro interés por todas aquellas ventajas que nos ofrece la tecnología. Todo ello tiene una presencia destacada en esta página web y en nuestras propias decisiones.</p>
        <figcaption class="blockquote-footer font-weight-lighter">Víctor Sáiz, Eric Martínez y Naia Ibáñez de Garayo</figcaption>
        <br>
    </div>
    <div style="max-width: 300px" class="col-0 col-md-4 col-xl-3 offset-2 offset-md-0 offset-xl-1 align-self-center">
        <img src="img/vitoria.jpg" class="img-fluid">
    </div>

</div>
@endsection
