<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
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
        $promociones = Promocion::all();
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
            <section class="gallery section" id="gallery">
                <div class="gallery__content">
                    <div class="row">
                        <div class="section__title">
                            <h1>Galeria</h1>
                            <span>Nuestros trabajos realizados</span>
                        </div>
                    </div>
                    <div class="gallery__list__img row container">
                        <div class="gallery__img">
                            <img src="{{ asset('img/img-insta/imagen_2.jpeg') }}" alt="" width="275">
                        </div>
                        
                        <div class="gallery__img">
                            <img src="{{ asset('img/img-insta/foto6.png') }}" alt="">
                        </div>
                        <div class="gallery__img">
                            <img src="{{ asset('img/img-insta/foto7.png') }}" alt="">
                        </div>
                        <div class="gallery__img">
                            <img src="{{ asset('img/img-insta/foto8.png') }}" alt="">
                        </div>
                    </div>
                    <button class="btn">Ver mas</button>
                    
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
                    <div class="testimonials__card container grid">
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="{{ asset('img/depoimentos/depoimento-1.png') }}" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Celaena</h1>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quidem quo saepe quibusdam nobis quas minima!</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="{{ asset('img/depoimentos/depoimento-2.png') }}" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Aelin</h1>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quidem quo saepe quibusdam nobis quas minima!</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="{{ asset('img/depoimentos/depoimento-1.png') }}" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Luciana</h1>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quidem quo saepe quibusdam nobis quas minima!</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="{{ asset('img/depoimentos/depoimento-2.png') }}" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Patricia</h1>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                    <i class='bx bxs-star star__icon' ></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quidem quo saepe quibusdam nobis quas minima!</p>
                                </div>
                            </div>
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
<script>
    const menuButtom = document.querySelector('#mobile-menu');
    if(menuButtom)
        menuButtom.addEventListener('click', e => {
            const menu = document.querySelector('.mobile-links');
            menu.classList.toggle('hidden');
        })
</script>
</html>
