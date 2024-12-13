@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Timetable</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timetables.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Day:</strong>
                {{ $timetable->day ? $timetable->day->day_name : 'No Day Assigned' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject:</strong>
                <td>{{ $timetable->subject ? $timetable->subject->subject_code . ' - ' . $timetable->subject->subject_name : 'No Subject Assigned' }}</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hall:</strong>
                <td>{{ $timetable->hall ? $timetable->hall->lecture_hall_name : 'No Hall Assigned' }}</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group:</strong>
                <td><td>{{ $timetable->group ? $timetable->group->name : 'No Group Assigned' }}</td></td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time From:</strong>
                {{ $timetable->time_from }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time To:</strong>
                {{ $timetable->time_to }}
            </div>
        </div>
    </div>
@endsection