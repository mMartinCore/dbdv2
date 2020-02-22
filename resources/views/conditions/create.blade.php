@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                <i class="fa fa-building-o" aria-hidden="true"></i> Condition
        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'conditions.store']) !!}

                        @include('conditions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
