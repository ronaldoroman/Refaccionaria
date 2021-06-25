<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
    var cont=0;
    function loopSlider(){
    var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");
            
            cont=0;
            
            break;
            }
            
            
            }},8000);

    }

    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }



    function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        

        loopSlider();
     
        
    
    
    
    
    });

  
  </script>

    </head>
    <body class="w-full">
        <nav class="flex justify-between items-center w-full bg-indigo-700">
                <img class="w-32 h-auto p-5" src="https://i.ibb.co/rQx48Kn/logo.jpg" alt="">
                
                <div class="text-white w-2/5 flex justify-between mr-8">
                    <a class="hover:text-gray-300 hover:underline" href="#prod">Productos</a>
                    <a class="hover:text-gray-300 hover:underline" href="#serv">Servicios</a>
                    <a class="hover:text-gray-400 hover:underline" href="#form">Quejas y sugerencias</a>
                </div>
        </nav>

        <div class="mt-20">
            <div class="sliderAx h-auto">
                <div id="slider-1" class="container mx-auto">
                    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://static.motor.es/fotos-noticias/2020/09/p_empieza-crear-taller-mecanico-reparar-tu-coche-202071277-1600945966_1.jpg)">
                        <div class="md:w-1/2">
                            <p class="font-bold text-sm uppercase">Servicios</p>
                            <p class="text-3xl font-bold">Los mejores servicios para el cuidado de tus vehiculos</p>
                            <p class="text-2xl mb-10 leading-none">Estamos ubicados en la ciudad de Iguala, GRO.</p>
                            <a href="#serv" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Ver servicios</a>
                        </div>  
                    </div> <!-- container -->
                <br>
                </div><!-- Slider1 -->

                <div id="slider-2" class="container mx-auto">
                    <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://media-adsa.camilyo.software/media-adsa/static/3949/225.jpg)">
                
                    <p class="font-bold text-sm uppercase">Refacciones</p>
                    <p class="text-3xl font-bold">Los productos con la mejor calidad</p>
                    <p class="text-2xl mb-10 leading-none">Nuestros productos son de las marcas mas reconocidas</p>
                    <a href="#prod" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Ver Refacciones</a>
                    
                    </div> <!-- container -->
                <br>
                </div><!-- Slider2 -->
            </div><!-- Container IMG -->

            <div  class="flex justify-between w-12 mx-auto pb-2">
                    <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
                <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
            </div><!-- Botones -->
        </div>

        <div class="container mx-auto">
            <h2 id="prod" class="text-3xl mt-10 font-bold">Nuestros Productos</h2>


            <div class="overflow-x-auto">
                <div class="min-w-screen min-h-auto bg-gray-100 flex items-center justify-center font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Nombre producto</th>
                                        {{-- <th class="py-3 px-6 text-center">Marca</th> --}}
                                        <th class="py-3 px-6 text-center">Cantidad en stock</th>
                                        <th class="py-3 px-6 text-left">Descripcion del producto</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @forelse ($productos as $producto)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="mr-2">
                                                    <img class="w-6 h-6 rounded-full" src={{ $producto->imagen}}/>
                                                </div>
                                                <span class="font-medium">{{ $producto->nombre}}</span>
                                            </div>
                                        </td>
                                        {{-- <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <div class="mr-2">
                                                    <img class="w-6 h-6 rounded-full" src="https://logos-marcas.com/wp-content/uploads/2020/05/Mazda-Logo.png"/>
                                                </div>
                                                <span>{{ $producto->imagen}}</span>
                                            </div>
                                        </td> --}}
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">

                                                <p>{{ $producto->cantidad }}</p>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span class="bg-purple-200 text-purple-600 py-1 px-3 text-xs">{{ $producto->descripcion }}</span>
                                        </td>
                                    
                                        </tr>
                                    @empty
                                    @endforelse
                                    


                                    <!--  -->

                                                    

                                    <!--  -->
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inicia Servicios -->
            <h2 id="serv" class="text-3xl mt-10 font-bold">Nuestros Servicios</h2>
            <div class="overflow-x-auto">
                <div class="min-w-screen min-h-auto bg-gray-100 flex items-center justify-center font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Tipo de servicio</th>
                                        <th class="py-3 px-6 text-center">Precio</th>
                                        <th class="py-3 px-6 text-center">Imagen</th>
                                        <th class="py-3 px-6 text-left">Descripcion del servicio</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">

                                    @forelse ($servicios as $servicio)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="font-medium">{{ $servicio->nombre }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-center">
                                                    <span>{{ $servicio->precio }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center justify-center">
                                                    <img class="w-16 h-16 rounded-full border-gray-200 border transform hover:scale-125" src={{ $servicio->imagen }}/>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $servicio->descripcion }}</span>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    


                                    <!--  -->

                                                    

                                    <!--  -->
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Termina Servicios -->



            <!-- Form -->
            <div  class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
                <div class="container mx-auto">
                    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                        <div class="text-center">
                            <h1 id="form" class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contactanos</h1>
                            <p class="text-gray-400 dark:text-gray-400">Envianos tus quejas o sugerencias para mejorar nuestros servicios en la refaccionaria.</p>
                        </div>
                        <div class="m-7">
                            <form action="https://api.web3forms.com/submit" method="POST" id="form">

                                <input type="hidden" name="apikey" value="047a6753-f733-4ef3-89da-b20c2123ea34">
                                <input type="hidden" name="subject" value="New Submission from Web3Forms">
                                <input type="checkbox" name="botcheck" id="" style="display: none;">


                                <div class="mb-6">
                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Ingresa tu nombre</label>
                                    <input type="text" name="name" id="name" placeholder="Roberto Martines" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Ingresa tu e-mail</label>
                                    <input type="email" name="email" id="email" placeholder="tu@correo.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                                </div>
                                <div class="mb-6">

                                    <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Tu numero de teléfono</label>
                                    <input type="text" name="phone" id="phone" placeholder="(733) 3721-483" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                                </div>
                                <div class="mb-6">
                                    <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Ingresa tu mensaje</label>

                                    <textarea rows="5" name="message" id="message" placeholder="Tu mensaje" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required></textarea>
                                </div>
                                <div class="mb-6">
                                    <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Enviar mensaje</button>
                                </div>
                                <p class="text-base text-center text-gray-400" id="result">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form -->
        </div><!-- Container -->


        <script>
            const form = document.getElementById('form');
            const result = document.getElementById('result');

            form.addEventListener('submit', function(e) {
                const formData = new FormData(form);
                e.preventDefault();
                var object = {};
                formData.forEach((value, key) => {
                    object[key] = value
                });
                var json = JSON.stringify(object);
                result.innerHTML = "Please wait..."

                fetch('https://api.web3forms.com/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: json
                    })
                    .then(async (response) => {
                        let json = await response.json();
                        if (response.status == 200) {
                            result.innerHTML = json.message;
                            result.classList.remove('text-gray-500');
                            result.classList.add('text-green-500');
                        } else {
                            console.log(response);
                            result.innerHTML = json.message;
                            result.classList.remove('text-gray-500');
                            result.classList.add('text-red-500');
                        }
                    })
                    .catch(error => {
                        console.log(error);
                        result.innerHTML = "Something went wrong!";
                    })
                    .then(function() {
                        form.reset();
                        setTimeout(() => {
                            result.style.display = "none"; 
                        }, 5000);
                    });
            })
            </script>
    </body>
</html>


