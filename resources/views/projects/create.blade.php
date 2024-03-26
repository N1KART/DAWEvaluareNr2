@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{route('projects.store')}}" method="post">
    @csrf
    <div class="container mt-4">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="Select" class="form-label">Status</label>
            <select class="form-select mb-2" name="status" id="status">
                <option value="In progres">In Progress</option>
                <option value="Finisat">Complete</option>
                <option value="Esuat">Failed</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection