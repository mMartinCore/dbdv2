@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
              Edit Condition
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($condition, ['route' => ['conditions.update', $condition->id], 'method' => 'patch']) !!}

                        @include('conditions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
