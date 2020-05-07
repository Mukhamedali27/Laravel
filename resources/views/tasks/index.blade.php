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
        <div class="row">
            <h3>My tasks</h3>
            <a href="{{route('tasks.create')}}" class="btn btn-success">Create</a>
            <div class="col-md-10.col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>
                                <a href="{{route('tasks.show',$task->id)}}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                <a href="{{route('tasks.edit',$task->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                {!! Form::open(['method'=>'DELETE','route'=>['tasks.destroy',$task->id]]) !!}
                                <button onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-remove"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
