@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
        <div class="flex justify-around items-center mt-10">
            <h2 class="text-3xl font-bold">Producto</h2>
            <a href="{{ route('productos.index') }}" class="flex items-center justify-center p-2 h-8 bg-blue-800 text-white rounded-full hover:bg-blue-600"  data-placement="left">
                Volver
                                    </a>
        </div>

        <section class="mt-10 w-screen h-auto flex justify-center items-center px-2">
            <div
                class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden"
            >
                <div>
                <img src="{{ $producto->imagen }}" alt="montaña" />
                </div>
                <div class="p-3 space-y-3">
                <h3 class="text-gray-700 font-semibold text-md">
                    {{ $producto->nombre }}
                </h3>
                <p class="text-sm text-gray-900 leading-sm">
                    {{ $producto->descripcion }}
                </p>
                <p>
                        ${{ $producto->precio }}.00MXN
                </p>
                <p>
                        {{ $producto->cantidad }} en stock
                </p>
                </div>
            </div>
        </section>
@endsection
