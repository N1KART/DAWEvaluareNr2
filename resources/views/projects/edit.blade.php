@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="/projects/{{$project -> id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description"  name="description" value="{{$project->description}}">
        </div>
        <div class="mb-3">
            <label for="Select" class="form-label">Status</label>
            <select class="form-select mb-2" name="status" id="status">
                <option value="In progres">In Progress</option>
                <option value="Finisat">Finisat</option>
                <option value="Esuat">Draft</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection