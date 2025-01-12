@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Do List</div>

                <div class="card-body">
                    <h4>Edit Page</h4>
                    <form method="POST" action="{{ route('todos.update') }}">
                    @csrf
                    @method('PUT')
                        <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" cols="5" rows="5">
                                {{ $todo->description }}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Completed?</label>
                            <select name="is_completed" class="form-control">
                                <option disabled selected>Select option</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection