
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Timetables</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetables.create') }}"> Add New Timetables</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>User Id</th>
            <th>Subject Id</th>
            <th>Day Id</th>
            <th>Hall Id</th>
            <th>Group Id</th>
            <th>Time From</th>
            <th>Time To</th>
            <th>Create At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($timetables as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->user_id }}</td>
            <td>{{ $t->subject_id }}</td>
            <td>{{ $t->day_id }}</td>
            <td>{{ $t->hall_id }}</td>
            <td>{{ $t->group_id }}</td>
            <td>{{ $s->time_from }}</td>
            <td>{{ $s->time_to }}</td>
            <td>{{ $t->created_at }}</td>
            <td>
                <form action="{{ route('timetables.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('timetables.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('timetables.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
