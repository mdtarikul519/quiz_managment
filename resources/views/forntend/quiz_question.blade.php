@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">  
     @foreach ( $data as $item )
            <form action="/action_page.php">           
                    <h1>{{ $item->question_name }}</h1>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> {{ $item->optionA }}</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> {{ $item->optionB }}</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> {{ $item->optionC}}</label><br>
                    <input type="checkbox" id="vehicle4" name="vehicle3" value="Boat">
                    <label for="vehicle4"> {{ $item->optionD}}</label><br><br>
                    <label > {{ $item->answer}}</label><br><br>
                    <input type="submit" value="Submit">
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
