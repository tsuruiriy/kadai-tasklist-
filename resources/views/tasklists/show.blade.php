@extends('layouts.app')

@section('content')


    <h1>タスクNo.{{ $task->id }} の詳細</h1>
    
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>タスク</th>
            <th>ステータス</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    <div><a class="btn btn-primary  col-md-3 col-sm-10" href="{{ action('TasksController@edit', $task->id) }}">編集する</a></div>
    {!! Form::model($task, ['route' =>['tasklists.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger mt-3 col-md-3 col-sm-10']) !!}
    {!! Form::close() !!}


@endsection