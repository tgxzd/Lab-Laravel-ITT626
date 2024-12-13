@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Hall</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('halls.index') }}"> Back</a>
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

    <form action="{{ route('halls.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hall Name:</strong>
                    <input type="text" name="lecture_hall_name" class="form-control" placeholder="Hall Name" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hall Place:</strong>
                    <input type="text" name="lecture_hall_place" class="form-control" placeholder="Hall Place" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <input type="number" name="capacity" class="form-control" placeholder="Hall Capacity" required>
                </div>
            </div>
           
            <input type="hidden" name="created_at" value="{{ now() }}">
            <input type="hidden" name="updated_at" value="{{ now() }}">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection