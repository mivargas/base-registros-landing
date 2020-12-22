@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Opciones Landing</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('landingOptions.create') !!}">Nueva opción</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
         <div style="color: #71a8ec; font-style: italic;"><strong>Cantidad de regitros: </strong><span>{!! $landingOptions->lastItem() !!} de {!! $landingOptions->total() !!}</span>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('landing_options.table')
            </div>
        </div>

        {{ $landingOptions->render() }}
        
        <div class="text-center">
        
        </div>
    </div>
@endsection

