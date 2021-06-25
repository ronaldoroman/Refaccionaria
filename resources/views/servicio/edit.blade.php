@extends('layouts.app')

@section('template_title')
    Update Servicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="flex justify-around items-center my-10">
                    <h2 class="text-3xl font-bold">Mostrar Servicio</h2>
                    <a href="{{ route('servicios.index') }}" class="flex items-center justify-center p-2 h-8 bg-blue-800 text-white rounded-full hover:bg-blue-600"  data-placement="left">
                        Volver
                                            </a>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('servicios.update', $servicio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('servicio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection
