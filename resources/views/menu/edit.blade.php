@extends('patials.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Meal</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('menu') }}"> Back</a>
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
    <form method="post" action="{{ route('menu.update',$menu->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Meal Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter Meal Name" name="txtFirstName" value="{{ $menu->first_name }}">
        </div>
        <div class="form-group">
            <label for="txtLastName">Image:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName" value="{{ $menu->last_name }}">
        </div>
        <div class="form-group">
            <label for="txtAddress">Meal Description:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Meal Description">{{ $menu->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection