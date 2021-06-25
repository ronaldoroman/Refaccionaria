@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? 'Show Servicio' }}
@endsection

@section('content')

    <div class="flex justify-around items-center mt-10">
            <h2 class="text-3xl font-bold">Servicio</h2>
            <a href="{{ route('servicios.index') }}" class="flex items-center justify-center p-2 h-8 bg-blue-800 text-white rounded-full hover:bg-blue-600"  data-placement="left">
                Volver
                                    </a>
        </div>

    <section class="mt-10 w-screen h-auto flex justify-center items-center px-2">
         <div
            class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden"
         >
            <div>
               <img src="{{ $servicio->imagen }}" alt="montaña" />
            </div>
            <div class="p-3 space-y-3">
               <h3 class="text-gray-700 font-semibold text-md">
                  {{ $servicio->nombre }}
               </h3>
               <p class="text-sm text-gray-900 leading-sm">
                {{ $servicio->descripcion }}
               </p>
               <p>
                    ${{ $servicio->precio }}.00MXN
               </p>
            </div>
         </div>
      </section>
@endsection
