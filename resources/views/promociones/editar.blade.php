@include('layouts.header')
@php
    use App\Models\Servicio_y_Promocion;
    use App\Models\Servicio;
    use Illuminate\Support\Facades\Log;
@endphp

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased mx-auto" style="min-height: 688px;">
    <div class="w-2/5 mx-auto mt-10 justify-center items-center">
        <div class="w-full max-w-2xl max-h-full">
            <div class=" p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Actualizar promo</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form method="post" action="{{ url('promociones/'.$promocion->id) }}" >
                    @csrf
                    @method('patch')
                    <div class="grid gap-4 mb-4 grid-cols-1">
                        <div>
                            <label for="nombre_promocion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la promocion</label>
                            <input type="text" name="nombre_promocion" id="nombre_promocion"  value="{{ $promocion->nombre_promocion }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre de una promocion" required="">
                            @error('nombre_promocion')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="precio_promocion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio $</label>
                            <input type="number" name="precio_promocion" id="precio_promocion" value="{{ $promocion->precio_promocion }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            @error('precio_promocion')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="precio_oferta_promocion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio promocional</label>
                            <input type="number" name="precio_oferta_promocion" id="precio_oferta_promocion" value="{{ $promocion->precio_oferta_promocion }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999">
                            @error('precio_oferta_promocion')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Servicios</h3>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 rounded-lg grid grid-cols-3 gap-3 dark:text-white">
                                <?php
                                    $cont_1 = 0;
                                    $lista = Servicio_y_Promocion::where('id_promocion', $promocion->id)->get();
                                ?>
                                @foreach($lista as $servicio_provisorio)  
                                    @php
                                        $cont_1++;
                                        $servicio = Servicio::findOrFail($servicio_provisorio->id_servicio);
                                    @endphp
                                    <li class="w-full dark:bg-gray-700 dark:border-gray-600 border-b rounded border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="selected_{{ $cont_1 }}" type="checkbox" value="{{ $servicio_provisorio->id }}" name="servicios[]" <?php echo ($servicio_provisorio->active) ? 'checked':''; ?> class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="selected_{{ $cont_1 }}" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $servicio->nombre_servicio }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            @error('servicios')
                                <p class="pt-4 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                       Actualizar promo
                    </button>
                </form>
            </div>
        </div>
    </div>

</section>
@include('layouts.footer')