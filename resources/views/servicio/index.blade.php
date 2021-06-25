@extends('layouts.app')

@section('template_title')
    Servicio
@endsection

@section('content')

        <div class="flex justify-around items-center mt-10">
            <h2 class="text-3xl font-bold">Nuestros Servicios</h2>
            <a href="{{ route('servicios.create') }}" class="flex items-center justify-center p-2 h-8 bg-blue-800 text-white rounded-full hover:bg-blue-600"  data-placement="left">
                                        {{ __('Crear servicio') }}
                                    </a>
        </div>
            <div class="overflow-x-auto">
                <div class="min-w-screen min-h-auto bg-gray-100 flex items-center justify-center font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">No</th>
                                        <th class="py-3 px-6 text-center">Nombre</th>
                                        <th class="py-3 px-6 text-center">Imagen</th>
                                        <th class="py-3 px-6 text-center">Precio</th>
                                        <th class="py-3 px-6 text-center">Descripcion</th>
                                        <th class="py-3 px-6 text-left">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @foreach ($servicios as $servicio)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="font-medium">{{ ++$i }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center">
                                                    <span>{{ $servicio->nombre }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center justify-center">
                                                    <img class="w-16 h-16 rounded-full border-gray-200 border transform hover:scale-125" src="{{ $servicio->imagen }}"/>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $servicio->precio }}</span>
                                            </td>

                                            <td class="py-3 px-6 text-center">
                                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $servicio->descripcion }}</span>
                                            </td>

                                            <td>
                                                <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
                                                    <a class="p-2 bg-green-800 text-white rounded-full hover:bg-green-600" href="{{ route('servicios.show',$servicio->id) }}">Show</a>
                                                    <a class="p-2 bg-blue-800 text-white rounded-full hover:bg-blue-600" href="{{ route('servicios.edit',$servicio->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="p-2 bg-red-800 text-white rounded-full hover:bg-red-600"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        
                                        </tr>
                                    @endforeach


                                    <!--  -->

                                                    

                                    <!--  -->
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


    </div>
@endsection
