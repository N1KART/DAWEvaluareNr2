@extends('layouts.app')

@section('title', 'projects')

@section('content')
<div class="row mt-4 mb-3">
    <h4>Proecte</h4>
</div>
<div class="row">
    <div class="col-md-10">
        <a href="{{ route('projects.create') }}" class="btn btn-sm btn-info mb-3">Adauga un proect</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Descriere</th>
                    <th>Stare</th>
                    <th>Data de incepere</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        <div class="row">
                            <a href="{{route('projects.edit' , ['project'=>$project -> id])}}" class="btn btn-sm btn-warning col-4 ms-3">Edit</a>
                            <form class="col-4 " action="{{ route('projects.destroy', ['project' => $project]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" {{ route('projects.destroy', ['project' => $project]) }}>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No projects</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection