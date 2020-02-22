@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
              Edit Anatomy
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($anatomy, ['route' => ['anatomies.update', $anatomy->id], 'method' => 'patch']) !!}

                        @include('anatomies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
