@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Bistros</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('bistros.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($bistros->isEmpty())
            <div class="well text-center">No Bistros found.</div>
        @else
            @include('bistros.table')
        @endif
        
    </div>
@endsection