<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- icon -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!-- estilo css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Glow Up</title>
</head>
<body>
    
    @php
        use App\Models\Promocion;
        use App\Models\Servicio;
        use App\Models\Servicio_y_Promocion;
        use App\Models\Comentario;
        use App\Models\Imagen;
        $promociones = Promocion::all();
        $imagenes = Imagen::all();
    @endphp
    <div class="principal mx-auto">
        <!-- ACA ES AL REVEZ !-->
        <nav class="py-3 flex justify-between lg:justify-center items-center">
            <div class="logo mx-auto w-1/6">
                <img src="{{ asset('img/coollogo_com-214171040.png') }}" height="50" width="100" alt="">
            </div>
            
            <div class="lg:block hidden">
                <ul class="flex items-center justify-center gap-2 py-2">
                    <li><a href="" class="font-bold text-black px-4 py-2 nav__link">Inicio</a></li>
                    <li><a href="" class="font-bold text-black px-4 py-2 nav__link">Quienes Somos</a></li>
                    <li><a href="#services" class="font-bold text-black px-4 py-2 nav__link">Servicios</a></li>
                    <li><a href="#package" class="font-bold text-black px-4 py-2 nav__link">Promociones</a></li>
                    <li><a href="#gallery" class="font-bold text-black px-4 py-2 nav__link">Galeria</a></li>
                    <li><a href="" class="font-bold text-black px-4 py-2 nav__link">Contacto</a></li>
                </ul>
            </div>
            <div class="mx-10">
                
            </div>
            <div class="block lg:hidden">
                <div class="nav__toggle m-7" id="nav-toggle">
                    <i class="bx bx-menu" id="mobile-menu"></i>
                </div>
                <ul style="background-color: rgb(243, 209, 195); margin-top: 12px;" class="mobile-links hidden w-full absolute z-50 left-0 text-center py-2">
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Inicio</a></li>
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Quienes Somos</a></li>
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Servicios</a></li>
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Promociones</a></li>
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Galeria</a></li>
                    <li class="py-2"><a href="" class="font-bold text-black px-4 py-1 nav__link">Contacto</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="hero__img">
                            <img src="{{ asset('img/home-img.png') }}" alt="">
                        </div>
                        <div class="hero__content">
                            <h1>Tu gran dia<br><span>con estilo</span></h1>
                            <p>Venga a visitar nuestro centro de belleza y aprovecha para agendar tu cita.</p>
                            <a href="https://wa.me/+5493875318295" target="_blank" class="btn btn__outline"><i class="bx bxl-whatsapp"></i>Agende su cita</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gallery__content">
                <div class="row">
                    <div class="section__title">
                        <h1>Galeria</h1>
                        <span>Nuestros trabajos realizados</span>
                    </div>
                </div>
                <div class="gallery-wrap" id="gallery">
                    <img src="{{ asset('img/back.png') }}" alt="" id="backBtn">
                    <div class="gallery">
                        @foreach ($imagenes as $imagen)
                            <div>
                                <span><img src="{{ asset('img/trabajos/'.$imagen->imagen) }}" alt=""></span>
                            </div>
                        @endforeach
                    </div>
                    <img src="{{ asset('img/next.png') }}" alt="" id="nextBtn">
                </div>
            </section>
            <section class="services section" id="services">
                <div class="services__content">
                    <div class="row">
                        <div class="section__title">
                            <h1>Servicios</h1>
                            <span>Que realziamos</span>
                        </div>
                    </div>
                    <div class="services__content__descripion grid container">
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/manicure.png') }}" alt="">
                                <p>Manicura</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/pedicure.png') }}" alt="">
                                <p>Pedicura</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/maquiagem.png') }}" alt="">
                                <p>Maquillaje social</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/pentado.png') }}" alt="">
                                <p>Peinado</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/corte.png') }}" alt="">
                                <p>Corte de cabello</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/sobrancelha.png') }}" alt="">
                                <p>Perfilado y laminado de cejas</p>
                            </div>
                        </div>
                        
                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/exfoliacion_facial.png') }}" alt="">
                                <p>Exfoliación facial</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/permanente_pestañas.png') }}" alt="">
                                <p>Lifting y permanente de pestañas</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner">
                                <img src="{{ asset('img/servicios/colorimetria.png') }}" alt="">
                                <p>Colorimetria</p>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <section class="package section" id="package">
                <div class="package_-content">
                    <div class="row">
                        <div class="section__title">
                            <h1>Combos promocionales</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($promociones as $promocion)
                            <div class="card">
                                <div class="card__title">
                                    <h1>{{ $promocion->nombre_promocion }}</h1>
                                </div>
                                <div class="card__items">
                                    <?php $lista = Servicio_y_Promocion::where('id_promocion', $promocion->id)->get(); ?>
                                    <div class="h-[130px] overflow-y-auto">
                                        @foreach($lista as $servicio_provisorio)  
                                            <?php $servicio = Servicio::findOrFail($servicio_provisorio->id_servicio); ?>

                                            @if ($servicio_provisorio->active)
                                                <!-- Icon disponible !-->
                                                <div class="item">
                                                    <i class='bx bx-message-square-check check__icon' ></i>
                                                    <p>{{ $servicio->nombre_servicio }}</p>
                                                </div>
                                            @else
                                                <!-- Icon no disponible !-->
                                                <div class="item">
                                                    <i class='bx bx-message-square-x x__icon' ></i>
                                                    <p class="not">{{ $servicio->nombre_servicio }}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @if ($promocion->precio_oferta_promocion != null)
                                        <p class="line-through text-3xl text-center my-2 font-bold">$ {{ $promocion->precio_promocion }}</p>
                                        <p class="text-4xl text-center my-2 font-bold">$ {{ $promocion->precio_oferta_promocion }}</p>
                                    @else
                                        <p class="text-4xl text-center my-4 font-bold">$ {{ $promocion->precio_promocion }}</p>
                                    @endif
                                    
                                    <button class="btn">Quiero este</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <br><br><br>
            <section class="testimonials section">
                <div class="testimonials__content">
                    <div class="row">
                        <div class="section__title">
                            <h1>Valoraciones</h1>
                            <span>Vea lo que nuestros quientes tienen para decir</span>
                        </div>
                    </div>
                    <div class="testimonials__card container grid overflow-y-auto h-[500px]" id="SeccionComentarios">
                        @php
                            $reversed = Comentario::all();
                            $comentarios = $reversed->reverse();
                            $comentarios->all();
                        @endphp
                        @foreach ($comentarios as $comentario)
                            <div class="testimonials__item flex">
                                <div class="testimonials__img">
                                    <img src="{{ asset('img/profiles/'.$comentario->avatar) }}" alt="">
                                </div>
                                <div class="testimonials__box">
                                    <div class="testimonials__name">
                                        <h1>{{ $comentario->autor }}</h1>
                                        <?php for($i=0; $i < $comentario->estrellas; $i++) { ?>
                                            <i class='bx bxs-star star__icon' ></i>
                                        <?php } ?>
                                    </div>
                                    <div class="testimonials__descripition">
                                        <p>{{ $comentario->comentario }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if( $message = Session::get('exito'))
                        <div class="w-2/5 mx-auto p-2" id="mensaje_exito">
                            <div class="rounded border-2 border border-black m-5 p-5 bg-white-700 text-green-500">
                                {{ $message }}
                            </div>
                        </div>
                    @endif
                    
                    <div class="w-2/5 mx-auto mt-[50px] p-2">
                        <div class="rounded border-2 border border-black m-5 p-5 bg-white-700 text-black">
                            <form method="post" action="{{ route('comentar') }}" >
                                @csrf
                                <div class="mb-6">
                                    <label for="comentario" class="block mb-2 text-xl font-medium">¿Qué te pareció mi estetica?</label>
                                    <input type="text" id="comentario" name="comentario" value="{{ old('comentario') }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Dejanos un comentario...">
                                    @error('comentario')
                                        <p class="pt-4 text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="autor" class="block mb-2 text-xl font-medium">Nombre completo</label>
                                    <input type="text" id="autor" name="autor" value="{{ old('autor') }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Dinos quien eres...">
                                    @error('autor')
                                        <p class="pt-4 text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <p class="clasificacion">
                                    <input id="radio1" type="radio" name="estrellas" value="5" class="radios">
                                    <label for="radio1" class="text-xl">★</label>
                                    <input id="radio2" type="radio" name="estrellas" value="4" class="radios">
                                    <label for="radio2" class="text-lg">★</label>
                                    <input id="radio3" type="radio" name="estrellas" value="3" class="radios">
                                    <label for="radio3" class="text-base">★</label>
                                    <input id="radio4" type="radio" name="estrellas" value="2" class="radios">
                                    <label for="radio4" class="text-sm">★</label>
                                    <input id="radio5" type="radio" name="estrellas" value="1" class="radios">
                                    <label for="radio5" class="text-xs">★</label>
                                </p>
                                @error('estrellas')
                                    <p class="p-2 text-right text-red-500">{{ $message }}</p>
                                @enderror
                                <button type="submit" id="enviar-comentario" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-blue-800">Comentar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer" id="contact">
            <div class="footer__list section container grid">
                <div class="footer__data">
                    <h1><a href="#"><img src="{{ asset('img/coollogo_com-214171040.png') }}" alt=""></a></h1>
                    <div class="footer__data-social">
                        <a href=""><i class='bx bxl-facebook social__icon'></i></a>
                        <a href=""><i class='bx bxl-instagram social__icon' ></i></a>
                        <a href=""><i class='bx bxl-whatsapp social__icon' ></i></a>
                    </div>
                </div>
                <div class="footer__data">
                    <h2>Nuestra direccion</h2>
                    <p>Avenida siempre viva 181<br> Argentina - Cordoba</p>
                </div>
                <div class="footer__data">
                    <h2>Nuestro horario</h2>
                    <p>Atendemos <br>de 09:00 as 18:00</p>
                </div>
                <div class="footer__data">
                    <h2>Contacto</h2>
                    <p>+54  XXXXXX</p>
                    <p>+54  XXXXXX</p>
                </div>
            </div>
            <div class="copy">
                <p>&copy Todos los derechos reservados</p>
            </div>
        </footer>
    </div>

    
</body>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    const menuButtom = document.querySelector('#mobile-menu');
    if(menuButtom)
        menuButtom.addEventListener('click', e => {
            const menu = document.querySelector('.mobile-links');
            menu.classList.toggle('hidden');
        })

    const mensajes = document.querySelector('#mensaje_exito');
    var lastTimeout;
    if(mensajes){
        clearTimeout(lastTimeout);
        lastTimeout = setTimeout(() => {
            mensajes.classList.add("hidden");
        }, 3000);
    }
</script>

<script>
    let scrollContainer = document.querySelector('.gallery');
    let backBtn = document.querySelector('#backBtn');
    let nextBtn = document.querySelector('#nextBtn');
    
    scrollContainer.addEventListener( "whell", (evt) =>{
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    })
    nextBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 300;
    })
    backBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 300;
    })
</script>
</html>
