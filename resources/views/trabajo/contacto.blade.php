@extends('layouts.plantilla')


@section('title', 'contacto')

@section('content')
    <style>
        
/*------------imagen----------*/
            /*----------CONTACTO- SLIDER----------*/
        /* .ubicacion{
        margin-top: -7%;
        } */
        .my-class {
        margin-top: -1%;
        width: 100%;
        height: 50%;
        padding: 0;
        text-align: center;

        }

        .my-class .item {
        height: 100vh;
        position: relative;

        }

        .my-class .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;

        }

        .my-class .item .cover {
        padding: 75px 0;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;

        }

        .my-class .item .cover .header-content {
        position: relative;
        padding: 56px;
        overflow: hidden;
        }

        .my-class .item .cover .header-content .line {
        content: "";
        display: inline-block;
        width: 100%;
        height: 100%;
        left: 34px;
        top: 0;
        position: absolute;
        border: 9px solid #fff;
        -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
        clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
        }

        .my-class .item .cover .header-content h2 {
        font-weight: 300;
        font-size: 35px;
        color: #fff;
        }

        .my-class .item .cover .header-content h1 {
        font-size: 56px;
        font-weight: 600;
        margin: 5px 0 20px;
        word-spacing: 3px;
        color: #fff;
        }

        .my-class .item .cover .header-content h4 {
        font-size: 24px;
        font-weight: 300;
        line-height: 36px;
        color: #fff;
        }

        .my-class .owl-item.active h1 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInDown;
        animation-delay: 0.3s;
        }

        .my-class .owl-item.active h2 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInDown;
        animation-delay: 0.3s;
        }

        .my-class .owl-item.active h4 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInUp;
        animation-delay: 0.3s;
        }

        .my-class .owl-item.active .line {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInLeft;
        animation-delay: 0.3s;
        }

        .my-class .owl-nav .owl-prev {
        position: absolute;
        left: 15px;
        top: 43%;
        opacity: 0;
        -webkit-transition: all 0.4s ease-out;
        transition: all 0.4s ease-out;
        background: rgba(0, 0, 0, 0.5) !important;
        width: 40px;
        cursor: pointer;
        height: 40px;
        position: absolute;
        display: block;

        border-radius: 0;
        }

        .my-class .owl-nav .owl-prev span {
        font-size: 1.6875rem;
        color: #fff;
        }

        .my-class .owl-nav .owl-prev:focus {
        outline: 0;
        }

        .my-class .owl-nav .owl-prev:hover {
        background: #000 !important;
        }

        .my-class .owl-nav .owl-next {
        position: absolute;
        right: 15px;
        top: 43%;
        opacity: 0;
        -webkit-transition: all 0.4s ease-out;
        transition: all 0.4s ease-out;
        background: rgba(0, 0, 0, 0.5) !important;
        width: 40px;
        cursor: pointer;
        height: 40px;
        position: absolute;
        display: block;

        border-radius: 0;
        }

        .my-class .owl-nav .owl-next span {
        font-size: 1.6875rem;
        color: #fff;
        }

        .my-class .owl-nav .owl-next:focus {
        outline: 0;
        }

        .my-class .owl-nav .owl-next:hover {
        background: #000 !important;
        }

        .my-class:hover .owl-prev {
        left: 0px;
        opacity: 1;
        }

        .my-class:hover .owl-next {
        right: 0px;
        opacity: 1;
        }


        /* mapaaaa */
        .map-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: center;
            padding: 5px;
            padding-top: 77px;
            max-width: 1412px;
            margin: 0 auto;
        } 

        #map {
            height: 500px;
            width: 105%;
            margin-right: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        } 

        #map:hover {
            transform: translateX(10px);
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
        } 

        #mapahom {
            background-color: #f7f7f7;
        } 

        .location-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: -25%;
            margin-left: 40px;
        }

        .location-title {
            font-size: 49px;
            font-weight: bold;
            margin-bottom: -48px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .location-title:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background-color: rgba(255, 255, 255, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .location-title:hover:before {
            opacity: 1;
        }

        .location-subtitle {
            font-size: 36px;
            font-weight: bold;
        }

        .location-text {
            font-size: 18px;
            color: #444;
            margin-top: 27px;
            font-family: sans-serif;
        }

        .location-icon {
            font-size: 24px;
            color: #ff0000;
            margin-right: 10px;
        }

        .location-address {
            display: flex;
            align-items: center;

        }
        /* @media screen and (max-width: 390px) {
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
           
        

            .footer-box {
                margin-top: 20px;
                text-align: center;
            }

            .libro-reclam {
                margin: 20px auto;
            }

            .cons {
                margin-left: 0;
                margin-top: 20px;
            }

            .phono,
            .ema {
                margin-right: 0;
            }
            .whatsapp-float {
                position: fixed;
                /* ajusta la posición que necesites aquí*/

            
        


        
    </style>

    <section class="ubicacion">
        <div class="my-class">
        <div class="owl-carousel owl-theme">
            <div class="item">
            <img  src="{{ asset('storage/img/contacto1.jpg') }}" alt="Descripción de la imagen">
            <div class="cover">
                <div class="container">
                <div class="header-content">
                    <div class="line"></div>
                    <h2>proyectos de habilitacion urbana</h2>
                    <h1>INVERSION INMOBILIARIO</h1>
                    <h4>Adquisición de una propiedad con el objetivo de obtener un retorno de inversión a través de la renta o venta de la misma :)</h4>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <img  src="{{ asset('storage/img/contacto2.jpg') }}" alt="Descripción de la imagen">
            <div class="cover">
                <div class="container">
                <div class="header-content">
                    <div class="line animated bounceInLeft"></div>
                    <h2>Invierte en la tierra para asegurar tu futuro financiero</h2>
                    <h1>TIERRA ES UN RECURSO LIMITADO :)</h1>
                    <h4>Los terrenos o propiedades son una inversion solida y rentable a largo plazo</h4>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="{{ asset('storage/img/contacto3.jpg') }}" alt="Descripción de la imagen">
            <div class="cover">
                <div class="container">
                <div class="header-content">
                    <div class="line animated bounceInLeft"></div>
                    <h2>Encuentra tu  nuevo hogar con nosotros</h2>
                    <h1>SOY LA LLAVE DE TU NUEVO HOGAR</h1>
                    <h4>Aumento en el valor de una propiedad a lo largo del tiempo debido a factores como la demanda, la oferta, mejoras en la infraestructura, entre otros</h4>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row m-0">
                <h3 class="col-12 location-title my-3">OFICINA</h3>

                <div class="col-xl-8 col-lg-8 col-12 my-3">
                    <div id="map">

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4  col-12">
                    <div class="row m-0">
                        <p class="col-12 location-subtitle">Huanuco</p>
                        <p class="col-12 location-text">
                            <i class="fas fa-map-marker-alt location-icon"></i> Jr. 2 de Mayo 1040 interior 6 segundo piso
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<script src="{{ asset('/js/contacto.js') }}"></script>
<script>
    function iniciarMap(){
    var coord = {lat: -9.930188965382795, lng: -76.24071568488172};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>


@endsection