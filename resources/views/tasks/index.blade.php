@extends('layout')
@extends('header-menu')
@section('content')



    <div class="container">
        <div class="row">
            <h3>My tasks</h3>
            <a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
        </div>

        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Actions</td>
                    </thead>

                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('tasks.edit', $task->id) }}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE',
                                    'route' => ['tasks.destroy', $task->id]]) !!}
                                <button onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
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