@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
              Edit Manner
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($manner, ['route' => ['manners.update', $manner->id], 'method' => 'patch']) !!}

                        @include('manners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
