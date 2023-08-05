@extends('forntend.layout.website')
@section('content')
    <div class="container">

        <div class="row "  style="padding:40px">
            @foreach ($data as $item)
                <div class="card mb-6" style="width: 18rem;margin: 30px;border: 1px solid;">
                    <img src="{{ $item->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->class_relation->class_name }}</h5>
                        <p class="card-text">{{ $item->quiz_name }}</p>
                        <a href="{{ route('quiz_question',$item->id) }}" class="btn btn-primary">{{ $item->teacher }}</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
