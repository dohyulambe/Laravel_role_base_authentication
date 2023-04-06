@extends('patials.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Show Meal</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('menu') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Meal Image:</th>
            <td>{{ $menu->first_name }}</td>
        </tr>
        <tr>
            <th>Meal Name:</th>
            <td>{{ $menu->last_name }}</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td>{{ $menu->address }}</td>
        </tr>
 
    </table>
@endsection