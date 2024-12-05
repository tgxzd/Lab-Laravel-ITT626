@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Subject</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('subjects.update', $subject->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <input type="hidden" name="id" value="{{ $subject->id }}"> <br/>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject Code:</strong>
                <input type="text" name="subject_code" value="{{ $subject->subject_code }}" class="form-control" placeholder="Subject Code" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject Name:</strong>
                <input type="text" class="form-control" name="subject_name" value="{{ $subject->subject_name }}" placeholder="Subject Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lecturer Name:</strong>
                <input type="text" class="form-control" name="lecturer_name" value="{{ $subject->lecturer_name }}" placeholder="Lecturer Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ route('subjects.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection