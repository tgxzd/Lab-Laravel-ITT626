@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Student Timetable</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetables.create') }}"> Add New Timetable</a>
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
                    <th>Day</th>
                    <th>Subject</th>
                    <th>Hall</th>
                    <th>Time From</th>
                    <th>Time To</th>
                    <th>Group</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timetables as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->day ? $t->day->day_name : 'No Day Assigned' }}</td>
                    <td>{{ $t->subject ? $t->subject->subject_code . ' - ' . $t->subject->subject_name : 'No Subject Assigned' }}</td>
                    <td>{{ $t->hall ? $t->hall->lecture_hall_name : 'No Hall Assigned' }}</td>
                    <td>{{ $t->time_from }}</td>
                    <td>{{ $t->time_to }}</td>
                    <td>{{ $t->group ? $t->group->name : 'No Group Assigned' }}</td>
                    <td>
                        <form action="{{ route('timetables.destroy', $t->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('timetables.show', $t->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('timetables.edit', $t->id) }}">Edit</a>
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