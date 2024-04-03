<div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'h5']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del nuevo rol']) !!}

            @error('name')
            <small class="text-danger">
                {{$message}}
            </small>

            @enderror

        </div>

        <h2 class="h3">Lista de Permisos</h2>

        @foreach ($permissions as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1, mb-3']) !!}
                {{$permission->description}}
            </label>
        </div>
        @endforeach
