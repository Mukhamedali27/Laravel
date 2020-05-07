@extends('layout_task')
@section('content')
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('public/test/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/test/css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('public/test/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('views/Layouts/style_for_Devine.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="container">
        <h3>Crate Task</h3>

@include('errorsfunctions.errors')

        <div class="row">
          <div class="col-md-12">

                {!! Form::open(['route'=>['tasks.store']]) !!}
                //
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <br>
                    <textarea name="description" id="" val cols="30" rows="10" class="form-control">{{old('description')}}
                    </textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
