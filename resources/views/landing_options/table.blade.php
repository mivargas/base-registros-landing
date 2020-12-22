<table class="table table-responsive" id="landingOptions-table">
    <thead>
        <tr>
            <th>Descripción</th>
            <th colspan="3">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($landingOptions as $landingOption)
        <tr>
            <td>{!! $landingOption->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['landingOptions.destroy', $landingOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('landingOptions.show', [$landingOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('landingOptions.edit', [$landingOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>