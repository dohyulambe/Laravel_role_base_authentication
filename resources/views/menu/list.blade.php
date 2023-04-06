@extends('patials.main')

@section('content')
    <div class="row" position="relative">
        <div class="col-lg-11">
                <h2>ENTER DETAILS OF MENU BELOW</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('menu.create') }}">Add</a>
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
            <th>Meal Image</th>
            <th>Meal Name</th>
            <th>price</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($menus as $menu)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $menu->first_name }}</td>
                <td>{{ $menu->last_name }}</td>
                <td>{{ $menu->address }}</td>
                <td>
                    <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('menu.show',$menu->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('menu.edit',$menu->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
