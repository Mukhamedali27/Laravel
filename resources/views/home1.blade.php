
@extends('Layouts.main')
@section('content')
    @if(session('successing'))
        <div class="alert alert-success" role="alert" style="text-align: right">
            {{session('successing')}}
        </div>
    @endif
@endsection
