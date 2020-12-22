<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Field -->
<div class="form-group col-sm-12">
    <hr>
    <h3>Permiso especial</h3>
    <label>{!! Form::radio('special', 'all-access') !!} Acceso total</label> &nbsp;
    <label>{!! Form::radio('special', 'no-access') !!} Ningún Acceso</label>
</div>

<div class="form-group col-sm-12">
    <hr>

<h3>Lista de Permisos</h3>

    <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
            <label>
                {{ Form::checkbox('permissions[]', $permission->id )   }}
                {{ $permission->name }}
                <em>({{ $permission->description }})</em>
             </label>
        </li>
        @endforeach
    </ul>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roles.index') !!}" class="btn btn-default">Cancel</a>
</div>
