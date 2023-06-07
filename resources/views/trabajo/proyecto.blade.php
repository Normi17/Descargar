@extends('layouts.plantilla')


@section('title', 'home')

@section('content')
    <style>
        .container-title {
            text-align: center;
        }

        .producto {
            position: relative;
            /* Añade esta línea */
            z-index: -1
                /* Añade esta línea */
        }

        /* Estilos de la sección de productos */
        .producto-contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }

        .box-proyec {
            position: relative;
            padding: 19px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: var(--box-shadow);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .box-proyec:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow);
        }

        .box-proyec h3 {
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0.5rem 0 0.5rem;
            text-align: center;
        }

        .imagen {
            max-width: 380px;
            overflow: hidden;
            margin: auto;
        }

        .imagen img {
            width: 100%;
            height: auto;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding-top: 0.5rem;
        }

        .content p {
            padding: 0.5rem;
            color: var(--text-color);
            border: 2px solid #83e19b8a;
            border-radius: 30px;
            text-transform: uppercase;
            background: #00ff6685;
            font-family: "-webkit-body";
            font-weight: 400;
            text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.5);
            font-size: 14px;
            box-shadow: 0px 2px 10px #83e19b8a;

        }
        .content img {
            max-width: 155px;
            height: auto;
            margin-top: -5%;
        }
        .heading h2 {
            text-align: center;
            font-weight: bold;
        }


        /*-----proyecto finalizado--------*/
        .box-tittle {
            background-color: #FF4136;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .box-tittle .box-body {
            display: flex;
            align-items: center;
        }

        .box-tittle .elementkit-infobox-icon {
            font-size: 30px;
            color: #fbff00;
            margin-right: 10px;
            padding: 20px;
        }

        .box-tittle .elementskit-info-box-title {
            font-size: 23px;
            font-weight: bold;
            margin: 0;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .box-tittle p {
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 0;
            line-height: 1.4;
            color: #000;
        }
/* fiis */
        

        .finish {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            animation: fadein 1s ease-in-out;
        }

        .finish_img {
            flex-basis: 50%;
            max-width: 400px;
            margin-right: 2rem;
            animation: slidein 1s ease-in-out;
        }

        .finish_img img {
            width: 100%;
            height: auto;
        }

        .finish_img h3 {
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 1rem;
        }

        .contenidosss {
            flex-basis: 40%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 1rem;
        }

        .finish_img h3 {
            font-size: 1rem;
            margin-left: 20%;
        }

        .contenidosss p {
            font-size: 1rem;
        }

        .contenidosss a {
            font-size: 1rem;
        }


        .contenidosss a.button {
            background-color: #FF4136;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 1.2rem;
            text-transform: uppercase;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .contenidosss a.button:hover {
            background-color: var(--color-naranja);
        }

        .contenidosss img {
            max-width: 150px;
            height: auto;
            margin-left: 58%;
            margin-top: -17%;
            animation: slidein 1s ease-in-out;
        }
        @media (max-width: 390px) {
            .producto-contenedor {
                grid-template-columns: 1fr; /* cambia el layout de grid a unidimensional */
                padding: 10px;
            }
            
            .box-proyec {
                padding: 10px;
            }
            
            .box-proyec h3 {
                font-size: 0.9rem;
            }

            .imagen img {
                max-width: 100%;
            }

            .content {
                padding-top: 0.25rem;
            }
            
            .content p {
                padding: 0.3rem;
                font-size: 0.8rem;
            }
            
            .content img {
                max-width: 100px;
            }

            .finish_img {
                max-width: 100%;
            }
            
            .finish_img h3 {
                font-size: 1.3rem;
            }
            
            .contenidosss {
                margin-top: 0.5rem;
            }

            .contenidosss p,
            .contenidosss a {
                font-size: 0.9rem;
            }
            
            .contenidosss a.button {
                font-size: 1rem;
                padding: 8px 16px;
            }
            
            .contenidosss img {
                max-width: 100px;
                margin-left: 50%;
                margin-top: -10%;
            }
}

       

       
      

    </style>

    <section id="producto">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 heading">
                    <h2> TODO LOS PROYECTOS </h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 my-2">
                    <div class="box-proyec">
                        <div class="imagen">
                            <img src="{{ asset('storage/img/jardines.jpg') }}" alt="Descripción de la imagen">
                            <h3> Residencial "Jardines de Huanuco"</h3>
                        </div>
                        <div class="content">
                            <p>Adquiere tu lote aqui!</p>
                            <img src="{{ asset('storage/img/logojardines.png') }}" alt="Descripción de la imagen">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 my-2">
                    <div class="box-proyec">
                        <div class="imagen">
                            <img src="{{ asset('storage/img/esperanza.jpg') }}" alt="Descripción de la imagen">
                            <h3>Residencial "la Nueva Esperanza"</h3>
                        </div>
                        <div class="content">
                            <p>Adquiere tu Lote aqui!..</p>
                            <img src="{{ asset('storage/img/logoesperanza.png') }}" alt="Descripción de la imagen">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 my-2">
                    <div class="box-proyec">
                        <div class="imagen">
                            <img src="{{ asset('storage/img/torres.jpg') }}" alt="Descripción de la imagen">
                            <h3>Residencial Las Torres</h3>
                        </div>
                        <div class="content">
                            <p>aquiere tu lote aqui</p>
                            <img src="{{ asset('storage/img/logotorres.png') }}" alt="Descripción de la imagen">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 my-2">
                    <div class="box-proyec">
                        <div class="imagen">
                            <img src="{{ asset('storage/img/angeles.jpg') }}" alt="Descripción de la imagen">
                            <h3>Residencial Los Angeles</h3>
                        </div>
                        <div class="content">
                            <p>aquiere tu lote aqui</p>
                            <img src="{{ asset('storage/img/logoangeles.png') }}" alt="Descripción de la imagen">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container box-tittle my-4">
            <div class="row m-0">
                <div class="box-body">
                    <i aria-hidden="true" class="elementkit-infobox-icon far fa-star"></i>
                    <h3 class="elementskit-info-box-title">LOS PROYECTOS FINALIZADOS DE LA EMPRESA GRUPO RAIZ</h3>
                    <i aria-hidden="true" class="elementkit-infobox-icon far fa-star"></i>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row m-0">
                <div class="col-12 finish_img my-3">
                    <img src="{{ asset('storage/img/jardines.jpg') }}" alt="Descripción de la imagen">
                    <h3>Residencial Los Angeles</h3>
                    <div class="contenidosss">
                    <a href="#" class="button"> Entregado</a>
                    <img src="{{ asset('storage/img/logojardines.png') }}" alt="Descripción de la imagen">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@section('script')
@endsection
