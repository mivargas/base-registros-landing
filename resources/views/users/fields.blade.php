<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::date('email_verified_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->


@if(isset($roles))
<div class="form-group col-sm-12">
    <hr>

<h3>Lista de roles</h3>

    <ul class="list-unstyled">
        @foreach($roles as $role)
        <li>
            <label>
                 @php
                $r= false;
                @endphp
                @if(isset( $role_user[0]->id) && $role->id == $role_user[0]->id)
                    @php
                        $r= true;
                    @endphp
                @endif
                {{ Form::radio('roles', $role->id, $r)   }}
                {{ $role->name }}
                <em>({{ $role->description }})</em>
             </label>
        </li>
        @endforeach
    </ul>
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>

