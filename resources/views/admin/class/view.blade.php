@extends('admin.index')
@section('content')
@if (session()->get('update'))
<script>
    Swal.fire(
        'Good job!',
        '{{ session()->get('update') }}',
        'update'
    )
</script>   
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                       <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table_wraper">
                                 <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>name</th>
                                            <th>role</th>
                                            <th>teacher</th>
                                            <th  style="width: 155px" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $alldata as $data )
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->roll }}</td>
                                                <td>{{ $data->teacher }}</td>
                                                <td>
                                                    <div class="table_action">
                                              
                                                         <a class="btn btn-sm btn-outline-info" href="{{ route('admin.class.edit',$data->id) }}">Edit</i></a>
                                                            {{-- <li><a class="btn btn-sm btn-outline-warning" href="">View</i></a></li> --}}
                                                       <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Do you want to confirm')" href="{{ route('admin.class.delete', $data->id) }}">Delete</i></a>
                                                      
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                 </table>
                            </div>
                        </div>
                       </div>
            </div>
        </div>
    </div>
@endsection
