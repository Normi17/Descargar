@extends('layouts.plantilla')


@section('title', 'home')

@section('content')
    <style>
          /* carrusell */
        .home {
            position: relative;
            /* Añade esta línea */
            z-index: -1
                /* Añade esta línea */
        }

        /*-----------HOME-------------*/
        #edshome {
            background-color: #ff7b00;

        }
        
        .carousel {
            position: relative;
            height: 500px;
            width: 90%;
            align-items: center;
            overflow: hidden;
            margin-left: 5%
            
        }

        .carousel-inner {
            height: 100%;
            width: calc(100% * 5);
            display: flex;
            transition: transform 0.5s ease;
        }


        .translate {
            flex: 1;
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        
        } 

        .translate img {
            display: flex;
            height: 110%;
            width: 100%;
            text-align: center;

        }

        .tns-nav {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tns-nav button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: rgb(255 0 22);
            border: none;
            padding: 7px;
        }

        .tns-nav button.tns-nav-active {
            background-color: #fff;
        }
        .carousel-inner:hover {
            cursor: pointer;
        }

        .tns-nav button:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .tns-nav button:hover {
            background-color: var(--color-negro);
        }

        /*-------------formulario de invierte---------------------------------------*/
        .formulario {
    width: 88%;
    display: flex;
    margin: auto;
    margin-left: 10%;
    max-width: 100%;
    align-items: center;
    justify-content: center;
    padding: 25px;
    flex-wrap: wrap;
    background-position-x: center;
}

.form-row {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.form-col {
    flex-basis: 22%; /* Define el ancho de las columnas */
    margin: 1.5%; /* Espacio alrededor de las columnas */
}

.label {
    display: block;
    margin-bottom: 0.5rem;
    margin-left: 5%;
    font-weight: bold;
    font-family: Arial, sans-serif;
    font-size: 15px;
}

.input {
    padding: 0.5rem 0.75rem;
    border: 1px solid #ced4da;
    font-size: 1rem;
    line-height: 1.5;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border-radius: 12px;
    width: 106%;
}

.input:focus {
    color: #565749;
    background-color: #fff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(197, 250, 99, 0.25);
}

.enviaron {
    padding: 0.4rem 1rem;
    margin-left:9%;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    background-color: var(--color-naranja);
    border: none;
    border-radius: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    transform: translateY(6px);
}

/* Para pantallas menores a 390px */
@media (max-width: 390px) {
    .form-col {
        flex-basis: 100%; /* Las columnas ocupan todo el ancho */
        margin: 3.5% 0; 
    }
   

    .enviaron {
        margin-left: 91px; 
        margin-right: 0;
        display: flex; 
        justify-content: center; 
    }


}

        
   /*-----iconos residenciales------*/
    .icon-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Estilo de cada tarjeta de icono */
    .icon-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 0 5px; /* Ajustado a 5px para reducir la separación */
        flex-basis: 20%; /* Ajusta este valor según tus necesidades */
    }

/* Estilo de los iconos */
    .icon-card i {
        border-radius: 50%;
        padding: 20px;
        font-size: 2.5em;
        color: #ffffff;
    }

    .lotes i {
        background-color: #4682B4;
    }

    .lanza i {
        background-color: #ed7337;
    }

    .habilitacion i {
        background-color: #4682B4;
    }

    .entreg i {
        background-color: #ed7337;
    }

    /* Estilo de los títulos */
    .icon-card h3 {
        font-size: 17px;
        font-family: Arial, sans-serif;
        text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
        margin-top: 10px;
    }

    @media screen and (max-width: 390px) {
        .icon-grid {
            flex-direction: column;
        }

        .icon-card {
            flex-basis: 100%;
            margin: 10px 0; /* Ajusta el margen para un diseño vertical */
        }

        .icon-card i {
            font-size: 2em; /* Ajusta el tamaño de los iconos si es necesario */
        }
    }


        /* formulario de registro */
        .bonito {
            padding: 20px 0;
        }

        .invertir {
            width: 100%;


        }
        .transparent-bg {
            background-color: rgb(250, 250, 250);
            /* Semi-transparent black */
        }
        .futuro_invertir h2 {
            font-size: 2.5rem;
            margin-left: 8rem;
            margin-bottom: 2rem;
            text-align: center;
            margin-top: 54px;

        }

        .futuro_invertir h3 {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
            margin-left: 25%;
        }

        .futuro_invertir img {
            margin-right: 1rem;
        }
        .form-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-direction: column;
            width: 94%;
            padding: 1rem;
            border-radius: 8px;
        }

        .form-columns {
            display: flex;
            width: 100%;
        }

        .form-column {
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .form-field {
            margin-bottom: 10px;
            width: 100%; 
        }

        .input-class {
            width: 95%;
            background-color: rgb(250, 250, 250);
            padding: 0.4rem;
            border: 1px solid rgb(187, 183, 183);
            border-radius: 6px;
            resize: none;
        }

        .textarea-class {
            width: 94%; 
            height: 55px;
            background-color: rgb(250, 250, 250);
            padding: 0.4rem;
            border: 1px solid rgb(187, 183, 183);
            border-radius: 6px;
            resize: none;
        }

        /* Resto del código CSS igual */


        .btn-form {
            padding: 0.4rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgb(205, 39, 21);
            border: none;
            border-radius: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 25%;
            margin-left: 160px;
            margin-right: auto;
            display: block;
        }
        @media screen and (max-width: 390px) {
            .bonito {
                padding: 10px 0; /* Reduce el padding */
            }

            .futuro_invertir h2 {
                font-size: 2rem; /* Reduce el tamaño de la fuente */
                margin-left: 2rem; /* Reduce el margen */
                margin-top: 27px; /* Reduce el margen */
            }

            .futuro_invertir h3 {
                font-size: 1.2rem; /* Reduce el tamaño de la fuente */
                margin-left: 5%; /* Cambia el margen a un porcentaje para mayor flexibilidad */
            }

            .form-flex {
                flex-direction: column; /* Cambia la dirección del layout a vertical */
                padding: 0.5rem; /* Reduce el padding */
            }

            .form-columns {
                flex-direction: column; /* Cambia la dirección del layout a vertical */
            }

            .form-column {
                width: 100%; /* Cambia el ancho a 100% para que los elementos se expandan en la dirección vertical */
            }

            .form-field {
                margin-bottom: 5px; /* Reduce el margen */
            }

            .input-class {
                width: 100%; /* Cambia el ancho a 100% */
                padding: 0.2rem; /* Reduce el padding */
            }

            .textarea-class {
                width: 100%; /* Cambia el ancho a 100% */
                height: 35px; /* Reduce la altura */
                padding: 0.2rem; /* Reduce el padding */
            }

            .btn-form {
                font-size: 0.8rem; 
                padding: 0.2rem 0.5rem; 
                width: 39%; 
                display: block; 
                margin: 10px auto; /* Centra el botón horizontalmente */
            }
        }


      
   





    </style>
    <!-- CSS de Bootstrap -->

    

<section>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="translate">
                <img src="../storage/app/public/img/unavida.png" alt="Descripción de la imagen">
            </div>
            <div class="translate">
                <img src="../storage/app/public/img/plusvalia.jpg" alt="Descripción de la imagen">
            </div>

            <div class="translate">
                <img src="../storage/app/public/img/jardines.jpg" alt="Descripción de la imagen">
            </div>
            <div class="translate">
                <img src="../storage/app/public/img/esperanza.jpg" alt="Descripción de la imagen">
            </div>
            <div class="translate">
                <img src="../storage/app/public/img/unavida.png" alt="Descripción de la imagen">
            </div>
        </div>

        <div class="tns-outer" id="tns1-ow">
            <div class="tns-nav" aria-label="Carousel Pagination">
                <button data-nav="0" aria-controls="tns1" aria-label="Carousel Page 1 (Current Slide)"
                    class="tns-nav-active"></button>
                <button data-nav="1" aria-controls="tns1" aria-label="Carousel Page 2" class=""></button>
                <button data-nav="2" aria-controls="tns1" aria-label="Carousel Page 3" class=""></button>
                <button data-nav="3" aria-controls="tns1" aria-label="Carousel Page 4" class=""></button>
                <button data-nav="4" aria-controls="tns1" aria-label="Carousel Page 5" class=""></button>
            </div>
        </div>
    </div>
</section>

<form>
    <div class="formulario">
        <div class="form-row">
            <div class="form-col">
                <label class="label" for="type">Tipo de Proyecto</label>
                <select class="input" name="tipo_proyecto" id="tipo_proyecto">
                    <option value="">¿Qué estás buscando?</option>
                    <option value="lotes">Lotes</option>
                    <option value="proyectos-entregados">Proyectos Entregados</option>
                </select>
            </div>
            <div class="form-col">
                <label class="label" for="ubication">Ubicación</label>
                <select name="ubicacion" id="ubicacion" class="input">
                    <option value="">ubicacion</option>
                    <option value="Ubicación 2">predio tingo </option>
                    <option value="Ubicación 1">Huanuco -Esperanza </option>
                </select>
            </div>
            <div class="form-col">
                <label class="label" for="project">Proyecto</label>
                <select name="proyecto" id="proyecto" class="input">
                    <option value="">Escoje tu proyecto</option>
                    <option value="Proyecto 1">Residencial Los Jardines de Huanuco</option>
                    <option value="Proyecto 2">Residencial La Nueva Esperanza</option>
                    <option value="proyecto 3">Residencial Las Torres</option>
                    <option value="Proyecto 4">Residencial los Angeles</option>
                </select>
            </div>
            <div class="form-col form-col-button">
                <button class="enviaron">Enviar</button>
            </div>
        </div>
    </div>
</form>


<section>
    <div class="iconoss">
        <div class="icon-grid">
            <div class="icon-card lotes">
                <i class="fa-solid fa-tree-city"></i>
                <h3>LOTES</h3>
            </div>
            <div class="icon-card lanza">
                <i class="fa-solid fa-house"></i>
                <h3>NUEVOS <br>LANZAMIENTOS</h3>
            </div>
            <div class="icon-card habilitacion">
                <i class="fa-solid fa-tree-city"></i>
                <h3>HABILITACION <br>URBANA</h3>
            </div>
            <div class="icon-card entreg">
                <i class="fa-solid fa-city"></i>                    
                <h3>PROYECTOS<br> ENTREGADOS</h3>
            </div>
        </div>
    </div>
</section>



<!-------------formulario de invierte---------->
<section class=" invertir">
    <div class="container py-4">
        <div class="row m-0 transparent-bg ">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="row m-0">
                    <h2 class="contact-us__title col-12 text-center ">
                        Invierte en tu futuro <strong> <br/>¡Compra hoy..!</strong>
                    </h2>
                    <h3 class="contact-us__subtitle col-12 text-center">
                        <i class="fa fa-pen-to-square fa-2x" style="color: #efdd03; margin-left: -22px; margin-top: 1px;"></i>
                        <span style="font-size: smaller; " >Regístrate para brindarte <br/>excelentes beneficios.</span>
                    </h3>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 form">
                <form id="form" class="form-flex">
                    <div class="form-columns">
                        <div class="form-column">
                            <div class="field form-field">
                                <input type="text" name="from_name" id="from_name" class="input-class" placeholder="Nombre">
                            </div>
                            <div class="field form-field">
                                <input type="number" name="to_name" id="to_name" class="input-class" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="form-column">
                            <div class="field form-field">
                                <input type="E-mail" name="reply_to" id="reply_to" class="input-class" placeholder="E-mail">
                            </div>
                            <div class="field form-field">
                                <input type="text" name="direccion" id="direccion" class="input-class" placeholder="Direccion">
                            </div>
                        </div>
                    </div>
                    <div class="field form-field">
                        <textarea name="message" id="message" class="textarea-class" placeholder="Mensaje"></textarea>
                    </div>
                    <input type="submit" id="button" value="Enviar" class="btn-form">
                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@section('script')
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
    emailjs.init('eRNmeB4bg6X1fTT_6')
    </script>

    <script src="{{ asset('/js/home.js')}}"></script>
    
    <script>
        const btn = document.getElementById('button');

            function validateEmail(email) {
                const re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
                return re.test(email);
            }

            function validatePhoneNumber(phone) {
                const re = /^[0-9]+$/;
                return re.test(phone);
            }

            document.getElementById('form').addEventListener('submit', function(event) {
                event.preventDefault();

                let fromName = document.getElementById('from_name').value;
                let toName = document.getElementById('to_name').value;
                let replyTo = document.getElementById('reply_to').value;
                let direccion = document.getElementById('direccion').value;
                let message = document.getElementById('message').value;

                if(fromName == "" || toName == "" || replyTo == "" || direccion == "" || message == "") {
                    alert('Por favor, llena todos los campos.');
                    return false;
                }

                if (!validateEmail(replyTo)) {
                    alert('Por favor, ingresa un email válido.');
                    return false;
                }

                if (!validatePhoneNumber(toName)) {
                    alert('Por favor, ingresa un número de teléfono válido.');
                    return false;
                }

                btn.value = 'Enviando...';

                const serviceID = 'default_service';
                const templateID = 'template_r8hhhes';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Enviar';
                        alert('Enviado!');
                        location.reload();
                    }, (err) => {
                        btn.value = 'Enviar';
                        alert(JSON.stringify(err));
                    });
            });

            const phoneNumberInput = document.getElementById('to_name');

            phoneNumberInput.addEventListener('input', function(e) {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
    </script>
    <!-- JS de Bootstrap (incluye Popper) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    




@endsection
