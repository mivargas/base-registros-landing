@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Landing Use
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($landingUse, ['route' => ['landingUses.update', $landingUse->id], 'method' => 'patch']) !!}

                        @include('landing_uses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection