@extends('layouts.app')

@section('content')

    <h1>タスク新規追加</h1>
    
    <div class="row">
        <div class="col-12">
            {!! Form::model($task, ['route' => 'tasklists.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                {!! Form::submit('投稿', ['class' => 'btn btn-primary col-md-3 col-sm-10']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection