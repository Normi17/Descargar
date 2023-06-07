<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital  ,wght@0,200;0,300;0,400;0,500;0,700;1,600&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    :root {
        --MAIN-COLOR: #ffff;
        --color-naranja: rgba(230, 0, 0, 1);
        --color-secundario: rgba(97, 3, 29, 0.603);
        --color-box: rgb(255, 0, 0);
        --color-yellow: rgb(255, 230, 0);
        --color-amarillo: rgba(209, 192, 22);
        --color-black: rgb(0, 0, 0);
        --color-negro: rgb(34, 33, 29);
        --main-color: #f2f2f2;
        --text-color: #333;
        --color-primario: 0px 0px 10px #333;
        --color-verde: rgb(117, 218, 155);
        --main-color: #ff6600;
        --text-color: #333;
        --box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    #navbar {
        position: sticky;
        top: 0;
        width: 100%;
        height: 70px;
        background-color: var(--color-naranja);
        z-index: 5;
        padding: 0px 9px;
        transition: 0.5s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .icon {
        background: #444;
        font-size: 1.5rem;
    }

    ul {
        display: flex;
        list-style: none;
        margin-bottom: 0;
    }

    ul li a {
        position: relative;
        color: #333;
        padding: 10px;
        font-size: 1.1rem;
        text-decoration: none;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin-right: 10px;
    }

    .icon ul li a {
        color: #fff;
    }

    ul li a span {
        transition: 0.5s;
        transition-delay: calc(0.05 * var(--i));
    }

    ul li a span:nth-child(2) {
        position: absolute;
        transform: translateY(35px);
        font-size: 2em;
    }

    ul li:hover a span:nth-child(2) {
        color: rgb(26, 245, 26);
    }

    .icon ul li a span:nth-child(2) {
        transform: translateY(2px);
    }

    .icon ul li a span:nth-child(1) {
        transform: translateY(-30px);
    }

    .logo img {
        width: 88px;
        height: 83px;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        margin-left: 36px;
    }

    .logo img:hover {
        transform: translate(0);
    }

    .icon .brand span:nth-child(1) {
        transform: translateY(-5px);
        color: #fff;
    }



    .ul__nav {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        list-style: none;
    }

    .ul__nav a {
        position: relative;
        padding: 0.5rem 0.5rem;
        text-decoration: none;
        transition: all 0.35s ease;
        font-size: 11px;
        margin-right: 20px;
    }

    .ul__nav a span:nth-child(1)::before,
    .ul__nav a span:nth-child(1)::after {
        position: absolute;
        height: 15px;
        width: 15px;
        content: '';
        transition: all 0.35s ease;
        opacity: 0;
    }

    .ul__nav a span:nth-child(1)::before {
        right: 0;
        top: 35%;
        border-right: 3px solid #ffffff;
        border-top: 3px solid #ffffff;
        transform: translate(100%, -50%) rotate(45deg);
    }

    .ul__nav a span:nth-child(1)::after {
        left: 0;
        top: 70%;
        border-left: 3px solid #ffffff;
        border-bottom: 3px solid #ffffff;
        transform: translate(-100%, -50%) rotate(45deg);
    }

    .ul__nav a:hover span:nth-child(1)::before,
    .ul__nav a:hover span:nth-child(1)::after {
        transform: translate(0%, -50%);
        opacity: 1;
    }

    #menu_body .icon {
        border: none; 
        border-radius: 0; 
    }

    #menu_body a::before,
    #menu_body a::after {
        border: none;
    }

  
    /*----------------FOOTER----------------------------------*/

    .footer {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        background: rgba(50, 50, 50, 1);
        color: #fff;

        margin: 0 auto;
        /* centra el contenedor */
    }


    .footer-box h3 {
        font-family: sans-serif;
        font-weight: bold;
        text-align: center;
        margin-top: 25px;
    }

    .footer-box p {
        font-size: 0.93rem;
        margin-bottom: 10px;
        margin-top: 30px;
    }

    .libro-reclam {
        width: 149px;
        /* ajusta el tamaño a tu gusto */
        margin-top: 20px;
        margin-left: 35%;
        /* quita la margen izquierda */
    }



    /*----REDES SOCIALES-----*/
    .cons {
        display: flex;
        gap: 20px;
        justify-content: center;
        /* centra los iconos horizontalmente */
        align-items: center;
        /* centra los iconos verticalmente */
        margin-left: 20px;
        margin-top: 50px;
        /* retrocede los iconos 20px */
    }

    /* Resto de tu CSS... */

    .internet {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        outline: 2px solid #fff;
        transition: all 0.25s;
        margin-bottom: 50px;
        background-color: transparent;
        color: #fff;
    }

    .internet:hover {
        outline-offset: 4px;
        color: #f8f8f8;
        background-color: inherit;
    }

    .internet:hover i {
        animation: shake 0.25s;
    }

    .internet i {
        margin: 0;
    }

    .internet-facebook {
        background-color: #1877f2;
        /* Facebook blue */
    }

    .internet-facebook:hover {
        background: #1877f2;
    }

    .internet-twitter {
        background: #1da1f2;
        /* Twitter blue */
    }

    .internet-twitter:hover {
        background: #1da1f2;
    }

    .internet-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        /* Instagram pink */
    }

    .internet-tiktok {
        background: #010101;
        /* tono negro/gris oscuro */
        background: linear-gradient(45deg, #010101 30%, #0a0a0a 80%);
        /* degradado de negro/gris oscuro */
    }

    .internet-tiktok:hover {
        background: #080808;
    }

    .internet-tiktok i {
        font-size: 20px;
    }

    /* Resto de tu CSS... */

/*    
    @keyframes shake {
        10% {
            transform: rotate(15deg);
        }

        20% {
            transform: rotate(-15deg);
        }

        30% {
            transform: rotate(-15deg);
        }

        40% {
            transform: rotate(-15deg);
        }
    }  */

    .contacto {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .contacto span {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
    }

    .phono {
        margin-right: 13rem;
    }

    .ema {
        margin-right: 10rem;
    }

    .contacto i {
        font-size: 20px;
        margin-right: 1rem;
    }

    p {
        text-align: center;
    }

    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;

    }

    .whatsapp-float a {
        display: block;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #25d366;
        color: #fff;
        text-align: center;
        font-size: 24px;
        line-height: 60px;
        transition: all 0.3s ease-in-out;

        box-shadow: 0.5em 0.5em 1em var(--color-verde),
            -0.5em -0.5em 1em var(--color-verde),
            inset 0 0 0 transparent,
            inset 0 0 0 transparent,
            0.5em -0.5em 1em var(--color-verde),
            -0.5em 0.5em 1em var(--color-verde);
    }


    .whatsapp-float a:hover {
        transform: scale(1.1);
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
            position: relative; /* Cambia "column" a "relative" */
        

      
            /* ajusta la posición que necesites aquí*/

        
        
    /* } */ 
    @media screen and (max-width: 390px) {
        #navbar {
            padding: 5px 2%;
            box-sizing: border-box;
        }

        .logo img {
            width: 40px; /* Reduce el tamaño del logo */
            height: auto;
            margin: 0 auto;
        }

        .ul__nav {
            flex-direction: row;
            align-items: center;
            letter-spacing: 1px;
            flex-wrap: nowrap; /* Evita que los elementos se envuelvan a la siguiente línea */
        }

        .ul__nav a {
            font-size: 5px; /* Reduce el tamaño de la fuente */
            padding: 1px;
            margin: 1px; /* Reduce el margen entre los enlaces */
        }
        .icon {
            font-size: 2vw; /* Reduce el tamaño del icono */
        }

        .footer {
            grid-template-columns: 1fr;
            justify-items: center;
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
    }




   

 /* Estilos existentes... */

/* @media screen and (max-width: 600px) {
  
    #navbar {
        flex-direction: column;
        height: auto;
    }

    /* .logo img {
        width: 50px;
        height: 50px;
        /* margin-left: 10px; 
    

    ul li a {
        padding: 5px;
        font-size: 0.8rem;
        margin-right: 5px;
    }

    .ul__nav a {
        padding: 0.5rem 0.2rem;
        margin-right: 10px;
        font-size: 9px;
    }

    .footer {
        grid-template-columns: 1fr;
    }
  
    .footer-box {
        text-align: center;
    }

    .libro-reclam {
        width: 100px;
        margin-left: 0;
    }

    .cons {
        flex-direction: column;
        margin-left: 0;
    }

    .contacto span {
        margin-left: 0;
        margin-bottom: 10px;
    }

    .phono, .ema {
        margin-right: 0;
    }
  
    .whatsapp-float {
        bottom: 10px;
        right: 10px;
    }

    .whatsapp-float a {
        width: 50px;
        height: 50px;
    }
} */


</style>

<header>
    
    <nav id="navbar">
        <a href="{{ route('home') }}" class="logo">
            <img  src="{{ asset('storage/img/logoblanco.png') }}" alt="Descripción de la imagen">
        </a>
        <ul class="ul__nav">
            <li style="--i:0;">
                <a href="{{ route('home') }}">
                    <span>Inicio</span>
                    <span><ion-icon name="home-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:1;">
                <a href="{{ route('proyecto') }}">
                    <span>Proyectos</span>
                    <span><ion-icon name="business-outline"></ion-icon></span>
                </a>
            </li>
            <li style="--i:2;">
                <a href="{{ route('nosotros') }}">
                    <span>Nosotros</span>
                    <span><ion-icon name="people-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:3;">
                <a href="{{ route('invierte') }}">
                    <span>Invierte </span>
                    <span><ion-icon name="cash-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:4;">
                <a href="{{ route('contacto') }}">
                    <span>Contacto</span>
                    <span><ion-icon name="call-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:5;">
                <a href="{{ route('blog') }}">
                    <span>Blog</span>
                    <span><ion-icon name="mail-outline" ></ion-icon></span>
                </a>
            </li>                
        </ul>
    </nav>
</head>
    <nav class="header_phone">
        <div class="row m-0 d-flex align-items-center">
            <div class="col-3">
                <!-- <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('storage/img/logoblanco.png') }}" alt="Descripción de la imagen">
                </a> -->
            </div>
        </div>
        <ul class="nav flex-column d-none" id="menu_body">
            <li style="--i:0;">
                <a href="{{ route('home') }}">
                    <span>Inicio</span>
                    <span><ion-icon name="home-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:1;">
                <a href="{{ route('proyecto') }}">
                    <span>Proyectos</span>
                    <span><ion-icon name="business-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:2;">
                <a href="{{ route('nosotros') }}">
                    <span>Nosotros</span>
                    <span><ion-icon name="people-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:3;">
                <a href="{{ route('invierte') }}">
                    <span>Invierte </span>
                    <span><ion-icon name="cash-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:4;">
                <a href="{{ route('contacto') }}">
                    <span>Contacto</span>
                    <span><ion-icon name="call-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:5;">
                <a href="{{ route('blog') }}">
                    <span>Blog</span>
                    <span><ion-icon name="mail-outline" ></ion-icon></span>
                </a>
            </li>         
        </ul>
    </nav>

<body >
    <div class="container-fluid  p-0">
        <div class="row m-0">
            @yield('content')
        </div>
    </div>
</body>

<footer>
    <section class="footer" id="footer">

        <div class="footer-box">
            <h3>Contactenos</h3>
            <div class="contacto">
                <span><i class="fa-solid fa-location-dot fa-beat" style="color: #ffffff;"></i></i>Jr. 2 de mayo 1040 interior 6 segundo piso</span><br>
                <span class="phono" ><i class="fas fa-phone-alt" style="color: #ffffff;"></i>948393187</span><br>               
                    <span class="ema" ><i class="fa-solid fa-envelope" style="color: #ffffff;"></i>infogruporaiz.com</span>
            </div>
        </div>

        <div class="footer-box">
            <h3>Redes Sociales</h3>
            <p>Síguenos</p>

            <div class="cons">
                <a href="https://www.facebook.com/" target="_blank" class="con">
                    <div class="internet internet-facebook">
                        <i class="fab fa-facebook"></i>
                    </div>
                </a>
                <a href="https://www.twitter.com/" target="_blank" class="con">
                    <div class="internet internet-twitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="con">
                    <div class="internet internet-instagram">
                        <i class="fab fa-instagram"></i>
                    </div>
                </a>
                <a href="https://www.tiktok.com/" target="_blank" class="con">
                    <div class="internet internet-tiktok">
                        <i class="fab fa-tiktok"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Libro de Reclamaciones</h3>
            <p>Reclama aquí</p>
            <img class="libro-reclam" src="{{ asset('storage/img/libro.png') }}" alt="Descripción de la imagen">
     

        </div>

    </section>

    <div class="whatsapp-float">
        <a href="https://wa.me/NUMERODENUMERO" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

</footer>
<script>
    let lastScrolltop = 0;
    navbar = document.getElementById("navbar");
    window.addEventListener("scroll",function(){
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop > lastScrolltop){
            navbar.classList.add("icon");
        }else{
            navbar.classList.remove('icon');
        }
        lastScrolltop = scrollTop; 
    })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a2af082a84.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/plantilla.js') }}"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



@yield('script')
</html>