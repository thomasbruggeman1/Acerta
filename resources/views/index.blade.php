@extends("master")


@section("main")
    <h2>Fill in the form</h2>

    <!-- @foreach ($records as $record)
        <option value="{{$record -> Projectname}}">{{$record -> Projectname}}</option>
    @endforeach -->




    <form class="form-style-4" method="post" action="{{route('process')}}">
        @csrf
        <label for="Budgetcode">
        <span>Budgetcode:</span><input type="text" id="Budgetcode" name="Budgetcode">
        </label>

        <label for="Domein">
        <span>Domein:</span><input type="text" id="Domein" name="Domein">
        </label>

        <label for="Epicnr">
        <span>Epicnr:</span><input type="text" id="Epicnr" name="Epicnr">
        </label>

        <label for="Projectname">
        <span>Projectname:</span><input type="text" id="Projectname" name="Projectname">
        </label>

        <label for="Budget_owner_business">
        <span>Budget_owner_business:</span><input type="text" id="Budget_owner_business" name="Budget_owner_business">
        </label>

        <label for="Budget_owner_ict">
        <span>Budget_owner_ict:</span><input type="text" id="Budget_owner_ict" name="Budget_owner_ict">        
        </label>

        <label for="Baseline_budget">
        <span>Baseline_budget:</span><input type="number" id="Baseline_budget" name="Baseline_budget">
        </label>

        <label for="Baseline_facturen">
        <span>Baseline_facturen:</span><input type="number" id="Baseline_facturen" name="Baseline_facturen">
        </label>

        <label for="Start">Start:
        <input type="date" id="Start" name="Start">
        </label>

        <label for="Finish">Finish:
        <input type="date" id="Finish" name="Finish">
        </label>


        <label for="Comments">Comments:</label>
        <input type="textarea" onkeyup="adjust_textarea(this)"  id="Comments" name="Comments">

        <input type="submit" value="Add">

        


    </form>

@endsection("main")