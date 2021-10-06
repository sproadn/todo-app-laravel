@extends('layouts.app')
@section('title')
My Todo App
@endsection
@section('content')

<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach ($allTodos as $todo)
                <li class="list-group-item" @if($todo->completed) style="background-color: #ACFFAD" @endif>
                    <ul>
                        <li>{{ $todo->title }}</li>
                        <li>{{ date('d/m/Y', strtotime($todo->todo_date)) }}</li>
                        <li>
                            <a href="{{ route('detail_todo', ['id' => $todo->id]) }}" class="link-secondary">Détails</a> | 
                            <a href="{{ route('changeTodoStatus', ['id' => $todo->id]) }}" class="link-primary">Mark as {{ $todo->completed ? "undone" : "done" }}</a>
                        </li>
                    </ul>
                </li>
                <br>
            @endforeach
        </ul>
    </div>
</div>

@endsection