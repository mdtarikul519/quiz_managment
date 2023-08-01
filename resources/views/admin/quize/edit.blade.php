@extends('admin.index')
@section('content')
@if (session()->get('success'))
<script>
    Swal.fire(
        'Good job!',
        '{{ session()->get('success') }}',
        'success'
    )
</script>   
@endif
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('admin.quiz.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <h2>Studented update</h2>
                            <a href="" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                        </div>
                        <input type="text" value="{{ $data->id }}">
                        <div class="card-body">
                           
                            <div class="from-group col-md-6">
                                   <label for="">Class_id:</label>
                                   <select name="class_id" value="{{ $data->class_id }}" class="form-control">

                                          @foreach ( $classes as $item)
                                            <option  {{$data->class_id == $item->id?'selected':'' }}  value="{{ $item->id }}">{{ $item->name }}</option> 
                                          @endforeach
                                   </select>
                                   @error('name')
                                       <div class="text-danger">{{ $name }}</div>
                                   @enderror
                               </div>


                            <div class="from-group col-md-6">
                                <label for="">quiz Name:</label>
                                <input value="{{ $data->quiz_name }}" type="text" name="quiz_name" class="form-control" />
                                @error('quiz_name')
                                    <div class="text-danger">{{ $quiz_name }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-6">
                                <label>Teacher name:</label>
                                <input type="text" value="{{ $data->teacher }}" name="teacher" class="form-control">
                            </div>
                            <div class="form-group col-md-6 mt-6">
                                   <label>Image</label>
                                   <input type="file" name="image" class="form-control">
                                   <img height="100" src="/{{ $data->image }}" alt="">
                               </div>


                            <div class="text-center">
                                <button class="btn btn-outline-info">Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
