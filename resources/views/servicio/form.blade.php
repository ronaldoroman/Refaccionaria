<div class="box box-info padding-1 flex items-center justify-center">
    <div>
        <div class="box-body">
            
            <div class="form-group">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $servicio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('descripcion') }}
                {{ Form::text('descripcion', $servicio->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('precio') }}
                {{ Form::text('precio', $servicio->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
                {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('imagen') }}
                {{ Form::text('imagen', $servicio->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa una URL']) }}
                {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
            </div>

        </div>
        <div class="box-footer mt20 flex w-full pt-4">
            <button type="submit" class="p-2 bg-blue-800 text-white rounded-full hover:bg-blue-600 text-center w-full">Submitt</button>
        </div>
    </div>


    
</div>