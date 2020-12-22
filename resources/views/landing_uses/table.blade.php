<table class="table table-responsive" id="landingUses-table">
    <thead>
        <tr>
            <th>Descripción</th>
            <th colspan="3">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($landingUses as $landingUse)
        <tr>
            <td>{!! $landingUse->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['landingUses.destroy', $landingUse->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('landingUses.show', [$landingUse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('landingUses.edit', [$landingUse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>