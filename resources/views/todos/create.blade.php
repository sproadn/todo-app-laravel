@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')

<form action="{{!empty($todo) ? route('update_todo') : route('store_todo') }}" method="post" class="mt-4 p-4">
    @csrf()
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="title" value="{{ !empty($todo) ? $todo->title : '' }}" @if(!empty($todo)) disabled @endif>
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" name="description" rows="3">{{ !empty($todo) ? $todo->description : '' }}</textarea>
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Date</label>
        <input type="date" name="todo_date" class="form-control" value="{{ !empty($todo) ? date('Y-m-d', strtotime($todo->todo_date)) : '' }}">
    </div>
    @if(!empty($todo))
    <div class="form-group m-3">
        <input type="hidden" name="id" value="{{ $todo->id }}">
    </div>
    @endif
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection