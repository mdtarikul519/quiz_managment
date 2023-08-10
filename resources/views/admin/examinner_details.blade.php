@extends('admin.index')
@section('content')
<div class="container">
    <table class="table table-striped">
        <h2>Examinner list</h2>
        <thead>
            <tr>
                <th>name</th>
                <th>result</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($examinner_details as $data )
                
            @endforeach
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->marks}}out of  {{ $data->questions }}</td>
                <td>
                    
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
        </tbody>

    </table>
</div>
@endsection