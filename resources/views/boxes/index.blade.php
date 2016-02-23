@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Boxes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('boxes.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($boxes->isEmpty())
            <div class="well text-center">No Boxes found.</div>
        @else
            @include('boxes.table')
        @endif
        
    </div>
@endsection