@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>List of Groups</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('groups.create') }}"> Add New Group</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
    <table class="table table-bordered table-hover">
        <thead class="sticky-top bg-white">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Part</th>
                <th>Created At</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $g)
            <tr>
                <td>{{ $g->id }}</td>
                <td>{{ $g->name }}</td>
                <td>{{ $g->part }}</td>
                <td>{{ $g->created_at }}</td>
                <td>
                    <form action="{{ route('groups.destroy',$g->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('groups.show',$g->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('groups.edit',$g->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection