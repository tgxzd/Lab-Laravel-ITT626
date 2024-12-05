@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>List of Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
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
                <th>Email</th>
                <th>Joined On</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->created_at }}</td>
                <td>
                    <form action="{{ route('students.destroy',$s->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('students.show',$s->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('students.edit',$s->id) }}">Edit</a>
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

