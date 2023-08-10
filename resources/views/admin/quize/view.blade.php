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
                                        <th>Class_Name</th>
                                        <th>quiz_subject</th>
                                        <th>teacher</th>
                                        <th>Image</th>
                                        <th>Quizall_question</th>
                                        <th>Total_Examinner</th>
                                        <th style="width: 155px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alldata as $data)
                                        {{-- @dd($data->class_relation) --}}
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>   
                                                @if($data->class_relation)
                                                {{ $data->class_relation->class_name }}
                                                @endif           
                                            </td>
                                            <td>{{ $data->quiz_name }}</td>
                                            <td>{{ $data->teacher }}</td>
                                            <td>
                                                <img height="100" width="100" src="/{{ $data->image }}" alt="">
                                            </td>

                                            <td>
                                                @if($data->quizall_question)
                                                {{ $data->quizall_question->where('quiz_id',$data->id)->count('question_name') }}
                                            @endif
                                           </td>
                                           <td>
                                            @if($data->total_examiner)
                                            {{ $data->total_examiner->where('quiz_id',$data->id)->pluck('user_id')->unique()->count('user_id') }}
                                           @endif
                                           </td>
                                            <td>
                                                <div class="table_action">
                                                    <a class="btn btn-sm btn-info"
                                                    href="{{ route('admin.quiz.edit', $data->id) }}">Examiner</i></a>
                                                    <a class="btn btn-sm btn-outline-info"
                                                        href="{{ route('admin.quiz.edit', $data->id) }}">Edit</i></a>
                                                    {{-- <li><a class="btn btn-sm btn-outline-warning" href="">View</i></a></li> --}}
                                                    <a class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Do you want to confirm')"
                                                        href="{{ route('admin.quiz.delete', $data->id) }}">Delete</i></a>

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
