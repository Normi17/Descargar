@extends('layouts.plantilla')


@section('title', 'home')


@section('content')
    <style>
        /* ------------INVIERTE EN GRUPO RAIZ 4 colum--------*/
        .largo-plazo {

            padding: 50px 5px;
        }

        section.largo-plazo i {
            font-size: 40px;
        /* Cambia el valor de acuerdo a tus necesidades */
        }

        .bg_group_inviert {
            background-color: #edf2f7;
            border: 1px solid #ffffff;
        }

        .bg_group_inviert i {
            font-size: 39px;
        }

        table {
            background-color: #dee2e6;
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: center;
            border: none;
            border-right: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        .bg_group_inviert h6 {
            padding: 10px;
            font-weight: bold;
            text-align: center;
            font-size: 14px; /* Ajusta este valor según tus necesidades */
        }


        .bg_group_inviert p {
            font-size: 14px;
            font-weight: normal;
            margin-top: 0;
            margin-bottom: 0;
            text-align: left;    
            font-family: Arial;   
        }


        td:first-child {
            border-left: none;
        }

        td:last-child {
            border-right: none;
        }

        tr:first-child td {
            border-top: none;
        }

        tr:last-child td {
            border-bottom: none;
        }



        /* INVIETE IMG */


        .row {
            color: #000000;
        }

        .thumbnail {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            margin-bottom: 30px;
        }

        .thumbnail img {
            max-width: 100%;
        }

        .caption {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
            height: 100%;
        }

        .caption h5 {
            font-weight: bold;
            text-align: center;
            font-size: 15px;
        }

        .caption p {
            font-size: 14px;
            font-weight: normal;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
            border-color: #d43f3a;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-mini {
            padding: 5px 10px;
            font-size: 12px;
            width: 84px;  
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

    <section>
        <div class="container py-4">
            <div class="row m-0">
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-coins" style="color:#db1111; widht: 20%;"></i><br>
                        </div>
                        <h6 class="col-12 text-center"> ALTA RENTABILIDAD A LARGO PLAZO</h6><br>
                        <p>Los terrenos son una inversión rentable que incrementa su valor constantemente.
                             Son un recurso limitado con alta demanda y bajos costos de mantenimiento. Su valor
                              potencial puede ser considerable, proporcionando ganancias significativas a largo plazo.</p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-check-to-slot" style="color: #d9c907;"></i> <br>
                        </div>
                        <h6 class="col-12 text-center"> ALTA RENTABILIDAD A LARGO PLAZO</h6><br>
                        <p>Las renovaciones pueden ser una forma efectiva de mejorar el valor de una propiedad y aumentar las
                            posibilidades de venta, proporcionando consejos prácticos para llevar a cabo una renovación exitosa.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-piggy-bank" style="color: #ffa602;"></i>    
                        </div>
                        <h6 class="col-12 text-center"> AHORRO SEGURO</h6><br>
                        <p>Los Los terrenos tienden a ser el mejor camino para ahorrar y a la vez eres dueño de una propiedad, a
                            diferencia de tener todo tu dinero guardado sin uso sin rentabilizar tu ahorro.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-people-roof" style="color: #db1111; "></i>  
                        </div>
                        <h6 class="col-12 text-center">UNA INVERSIÓN PARA TU FAMILIA</h6><br>
                        <p>Es una inversión para ti y para las personas que más quieres. Los terrenos son heredables a tus
                            futuras generaciones</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            <div class="thumbnail">
                <a href="#"><img src="{{ asset('storage/img/inversion.jpg') }}" alt="Descripción de la imagen"></a>
                <div class="caption">
                <h5>INVERSION </h5>
                <p class="seguros"> las formas más rentables y seguras de invertir tu dinero</p>
                <a id="linea1" class="btn btn-mini btn-danger" href="#">&raquo; Leer Mas</a>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="thumbnail">
                <a href="#"><img src="{{ asset('storage/img/unavida.png') }}" alt="Descripción de la imagen"></a>
                <div class="caption">
                <h5>UN HOGAR Y UNA VIDA</h5>
                <p class="hogar">espacios únicos y personalizados que reflejen la personalidad</p>
                <a  class="btn btn-mini btn-danger" href="#">&raquo; Leer Mas</a>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="thumbnail">
                <a href="#"><img src="{{ asset('storage/img/plazo.jpg') }}" alt="Descripción de la imagen"></a>
                <div class="caption">
                <h5>CONSTRUIR RIQUEZA A LARGO PLAZO</h5>
                <p class="ingreso">genera ingresos a través de la inversión en propiedades</p>
                <a id="linea3" class="btn btn-mini btn-danger" href="#">&raquo; Leer Mas</a>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="thumbnail">
                <a href="#"><img src="{{ asset('storage/img/hogar.jpg') }}" alt="Descripción de la imagen"></a>
                <div class="caption">
                <h5>ENCUENTRA TU PROXIMO HOGAR</h5>
                <p class="vida">Un hogar para toda la vida</p>
                <a id="linea4" class="btn btn-mini btn-danger" href="#">&raquo; Leer Mas</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

  <script src="inv.js"></script>
  <script src="https://kit.fontawesome.com/a2af082a84.js" crossorigin="anonymous"></script>




@endsection

