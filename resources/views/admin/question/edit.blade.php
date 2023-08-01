@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.question.update',$editdata->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="">Quiz_id</label>
                                <select name="quiz_id" id="" value="{{ $editdata->quiz_id }}" class="form-control">
                                    @foreach ($quiz as $data)
                                        <option {{ $editdata->quiz_id == $data->id?'selected':''}} value="{{ $data->id }}">{{ $data->quiz_name }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="form-group col-md-6">
                                 <label for="">question_name</label>
                                 <input type="text" value="{{ $editdata->question_name }}" name="question_name" class="form-control">
                             </div>
                         
                             <div class="row">
                               <div class="col-md-6"> <label for="">A:</label></div>
                               <div class="col-md-6"> <label for="">B:</label></div>
                             </div>

                             <div class="row">
                               <div class="col-md-6"><input type="text" value="{{ $editdata->optionA }}" class="form-control" name='optionA'></div> 
                               <div class="col-md-6"><input type="text" value="{{ $editdata->optionB }}" class="form-control" name='optionB'></div> 
                            
                             </div>
                             <div class="row">
                                <div class="col-md-6"> <label for="">C:</label></div>
                                <div class="col-md-6"> <label for="">D:</label></div>
                              </div>
 
                              <div class="row">
                                <div class="col-md-6"><input type="text" value="{{ $editdata->optionC }}" class="form-control" name='optionC'></div> 
                                <div class="col-md-6"><input type="text"  value="{{ $editdata->optionD }}" class="form-control" name='optionD'></div> 
                             
                              </div>
                             

                              <div class="form-group col-md-6">
                                       <label for="">Answer</label>
                                       <input type="text" value="{{ $editdata->answer }}" name="answer" class="form-control">
                              </div>
                            
                              <button>update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
