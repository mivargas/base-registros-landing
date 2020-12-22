@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Landing Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($landingOption, ['route' => ['landingOptions.update', $landingOption->id], 'method' => 'patch']) !!}

                        @include('landing_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection