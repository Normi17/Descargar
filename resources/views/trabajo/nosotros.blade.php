@extends('layouts.plantilla')


@section('title', 'home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-****" crossorigin="anonymous" />
    <style>
        .nosotros {
            display: flex;
            justify-content: center;
        }

        /* Estilo para la imagen */


        .nosotros img {
            width: 100%; /* Ancho del 100% del contenedor */
            height: auto; /* Altura automática para mantener la proporción original */
            transition: opacity 0.3s ease; /* Transición suave de la propiedad "opacity" */
        }

        .nosotros img:hover {
            opacity: 0.5; /* Opacidad reducida al pasar el cursor */
        }

        /*------------equipo----------*/
        #equipoRaiz {
            text-align: center;
            margin-top: -2%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-lg-3 {
            margin: 10px;
            width: 250px; /* Ajusta este valor según tus necesidades */
        }

        .equipo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 8px; /* Ajusta este valor según tus necesidades */
            text-align: center;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
        }

        .equipo-item:hover {
            background: linear-gradient(0deg, #cc3e3e 0%, rgba(60, 51, 80, 0) 100%);
            transition: background-position 20s ease;
        }

        .circle-imgen {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 120px; /* Ajusta este valor según tus necesidades */
            height: 120px; /* Ajusta este valor según tus necesidades */
            border-radius: 50%;
            overflow: hidden;
        }

        .circle-imgen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mb-3 {
            margin-bottom: 0rem !important;
        }

        .nombequ {
            font-weight: bold;
            font-size: 12px; /* Ajusta este valor según tus necesidades */
            margin-top: 8px;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .ocupequ {
            font-size: 10px; /* Ajusta este valor según tus necesidades */
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .contact-info {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .contact-info .elementor-icon-list-icon {
            margin-right: 3px;
        }

        .contact-info .elementor-icon-list-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .correo a {
            color: black;
        }

        .correo:hover a {
            color: white;
        }

        .fa-mobile-alt:before {
            color: black;
            transition: color 0.3s ease-in-out;
        }

        .contact-info .elementor-icon-list-icon:hover .fa-mobile-alt:before {
            color: green;
        }

        .telefono-negrita {
            font-weight: bold;
        }
        @media screen and (max-width: 390px) {
            .logo img{
                width: 56px;
                height: 45px;
                margin-left: 0;


            }
            ul li a span {
                font-size: 7px;
            }
            .ul__nav a{
                padding: 0.5rem 0;
                margin-right: 0;
                
            }
            .ul__nav {
                gap: 9px;
                letter-spacing: 1.4px;
                padding-left: 0.5rem;
                
                
            }
            .footer {
                grid-template-columns: 1fr;
                flex-direction: column;
            }
        }



    </style>

    <section class="nosotros">

        <div>
            <img src="{{ asset('storage/img/grupal.jpg') }}" alt="Descripción de la imagen">
        </div>

    </section>

    <section id="equipoRaiz">
        <div class="conta">
            <div class="row m-0 my-5">
                <h2 class="col-12">ASESORES INMOBILIARIOS</h2>
                @foreach ($trabajos as $valor)
                    <div class="col-lg-3 text-center mt-5 d-inline-block">
                        <div class="equipo-item">
                            <div class="circle-imgen">
                                <img class="mb-3 imgesle" src="../storage/app/{{ $valor['foto'] }}">
                            </div>
                            <h3 class="nombequ">{{ $valor['nombre']}} {{$valor['apellido']}} </h3>
                            <p class="ocupequ">Asesor inmobiliario</p>
                            <div class="contact-info">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                                </span>
                                <span class="elementor-icon-list-text telefono-negrita">{{ $valor['telefono']}} </span><br>
                            </div>
                            <div class="correo">
                                <a href="{{ $valor['email']}}"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






<!-- Asesor  -->
<section >
    <div class="container">
        <div class="row m-0 py-3">
            <form action="{{ route('asesor') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="apellido" placeholder="Apellido">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="telefono" placeholder="Teléfono">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="email"class="input my-2"  name="email" placeholder="Email">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="file" class="input my-2" name="foto" accept="image/*">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="my-2 btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section>
    <form action="{{ route('guardarImagen') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="foto">
        <button type="submit">Enviar imagen</button>
    </form>

</section>
<section>
    <form action="{{ route('subir') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="video">Subir Video:</label>
        <input type="file" id="video" name="video" accept="video/mp4,video/x-m4v,video/*">
        <button type="submit">Subir</button>
    </form>

</section> 

@endsection

@section('script')
@endsection

