@extends('layouts.app')

@section('content')

    <h1>鶴井李依の一日のタスク</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td><a href="{{ action('TasksController@show', $task->id) }}">{{$task->id}}</a></td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <div><a class="btn btn-primary col-md-3 col-sm-10" href="/tasklists/create">新規タスクの追加</a></div>
   

@endsection