@extends("master")


@section("main")
    <h2>Fill in the form</h2>

    @foreach ($records as $record)
        <option value="{{$record -> Projectname}}">{{$record -> Projectname}}</option>
    @endforeach




    <form method="post" action="{{route('process')}}">
        @csrf
        <label for="Budgetcode">Budgetcode:</label>
        <input type="text" id="Budgetcode" name="Budgetcode">

        <label for="Domein">Domein:</label>
        <input type="text" id="Domein" name="Domein">

        <label for="Epicnr">Epicnr:</label>
        <input type="text" id="Epicnr" name="Epicnr">

        <label for="Projectname">Projectname:</label>
        <input type="text" id="Projectname" name="Projectname">

        <label for="Budget_owner_business">Budget_owner_business:</label>
        <input type="text" id="Budget_owner_business" name="Budget_owner_business">

        <label for="Budget_owner_ict">Budget_owner_ict:</label>
        <input type="text" id="Budget_owner_ict" name="Budget_owner_ict">        
    
        <label for="Baseline_budget">Baseline_budget:</label>
        <input type="number" id="Baseline_budget" name="Baseline_budget">
        
        <label for="Baseline_facturen">Baseline_budget:</label>
        <input type="number" id="Baseline_facturen" name="Baseline_facturen">

        <label for="Start">Start:</label>
        <input type="date" id="Start" name="Start">

        <label for="Finish">Finish:</label>
        <input type="date" id="Finish" name="Finish">


        <label for="Comments">Comments:</label>
        <input type="text" id="Comments" name="Comments">

        <input type="submit" value="Add">

        


    </form>

@endsection("main")