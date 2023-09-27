@include('layouts.header')

@php
    use App\Models\Imagen;
    $imagenes = Imagen::all();
@endphp

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased" style="min-height: 688px;">
    <br><br><br>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full mx-auto text-gray-300 pt-10">
                    <h1 class="text-2xl text-center">Bienvenida a la administracion, Mi amor <3 </h1>
                    <div class="w-1/2 mx-auto text-center m-[40px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <a href="{{ route('servicios.index') }}" class="p-3 rounded border-sky-500 border-2 bg-blue-600 hover:bg-blue-700 hover:cursor-pointer ">Crear servicios</a>
                        <a href="{{ route('promociones.index') }}" class="p-3 rounded border-sky-500 border-2 bg-blue-600 hover:bg-blue-700 hover:cursor-pointer">Crear promociones</a><!-- Modal toggle -->
                        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 border-2 border-sky-500" type="button">
                        Subir imagen
                        </button>
                    </div>
                </div>
            </div>  
            @if( $message = Session::get('exito'))
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        <p>{{ $message }}</p>
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            @endif
            <div class="px-10">
                <div class="w-full p-5 border-2 border-sky-500 mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10"> 
                    
                    @foreach($imagenes as $imagen)
                        <div class="max-w-[300px] mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="p-5">
                                    <img class="rounded-t-lg" src="{{ asset('img/trabajos/'.$imagen->imagen) }}" alt="" />
                                </div>
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $imagen->nombre }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $imagen->fecha }}</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Eliminar
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>  
             

  
  <!-- Main modal -->
  <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Subir imagen <3
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form action="{{ route('update.image') }}" method="post" enctype="multipart/form-data">
                <div class="p-6 space-y-6">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-1">
                        <div>
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la foto</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre de una foto" autofocus autocomplete="nombre">
                            @error('nombre')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="imagen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
                            <input type="file" name="imagen" id="imagen" value="{{ old('imagen') }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" autofocus autocomplete="imagen">
                            @error('imagen')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div> 
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subir Imagen</button>
                    <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                </div>
              </form>
          </div>
      </div>
  </div>
  

@include('layouts.footer')