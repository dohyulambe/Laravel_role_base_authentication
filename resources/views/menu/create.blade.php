@extends('patials.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add a New Meal</h2>
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
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Meal Image:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Meal Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtAddress">Price:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection