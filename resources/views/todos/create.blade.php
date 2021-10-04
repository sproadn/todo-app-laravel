@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')

<form action="{{ route('store_todo') }}" method="post" class="mt-4 p-4">
    @csrf()
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Date</label>
        <input type="date" name="todo_date" class="form-control">
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

<ul>
    @foreach ($allTodos as $todo)
        <ul>
            <li>Titre: {{ $todo->title }}</li>
            <li>Description: {{ $todo->description }}</li>
            <li>Date {{ date('d/m/Y', strtotime($todo->todo_date)) }}</li>
        </ul>
        <br>
    @endforeach
</ul>

@endsection