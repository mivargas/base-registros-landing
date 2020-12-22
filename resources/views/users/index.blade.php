@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Users</h1>
        <h1 class="pull-right">
            @can('users.create')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}">Add New</a>
           @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div style="color: #71a8ec; font-style: italic;"><strong>Cantidad de regitros: </strong><span>{!! $users->lastItem() !!} de {!! $users->total() !!}</span>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('users.table')
            </div>
        </div>
        {{ $users->render() }}
        <div class="text-center">
        
        </div>
    </div>
@endsection

