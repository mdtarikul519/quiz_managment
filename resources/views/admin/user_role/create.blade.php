@extends('admin.index')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('user_role.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card" style="background-color: #b09a9a">
                    <div class="card-header">
                        <div class="card-body">
                               <div class="form-group col-md-6">
                                       <label for="">Title</label>  
                                       <input type="text" name="title" class="form-control"> 
                               </div>
                               <div class="pl-3"><button>submit</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
