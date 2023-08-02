@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>quiz_name</th>
                                    <th>question_name</th>
                                    <th>OptionA</th>
                                    <th>OptionB</th>
                                    <th>OptionC</th>
                                    <th>OptionD</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alldata as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            @if ($item->quiz_relation)
                                                {{ $item->quiz_relation->quiz_name }}
                                            @endif
                                        </td>
                                        <td>{{ $item->question_name }}</td>
                                        <td>{{ $item->optionA }}</td>
                                        <td>{{ $item->optionB }}</td>
                                        <td>{{ $item->optionC }}</td>
                                        <td>{{ $item->optionD }}</td>
                                        <td>{{ $item->answer }}</td>
                                        <td>
                                            <div class="table_action">

                                                <a class="btn btn-sm btn-outline-info"
                                                    href="{{ route('admin.question.edit', $item->id) }}">Edit</i></a>
                                                {{-- <li><a class="btn btn-sm btn-outline-warning" href="">View</i></a></li> --}}
                                                <a class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Do you want to confirm')"
                                                    href="{{ route('admin.question.delete', $item->id) }}">Delete</i></a>

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
@endsection
