@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                             <h1>Total Question:{{ $question }}</h1> 
                            <h1>Correct:{{ $currect_result }}</h1>
                            <h2>Incorrect:</h2>
                   
                   
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
