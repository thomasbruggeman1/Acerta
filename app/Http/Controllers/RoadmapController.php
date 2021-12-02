<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roadmap;
class RoadmapController extends Controller
{
    function index(){
        $records = \App\Models\Roadmap::all();
        return view("index", ["records" => $records]);

    }


    function process(Request $request){
       //$result = $this -> validate($request);
       
        $budgetcode = $request -> input("Budgetcode");
        $domein = $request -> input("Domein");
        $epicnr = $request -> input("Epicnr");
        $projectname = $request -> input("Projectname");
        $budgetOwnerBusiness = $request -> input("Budget_owner_business");
        $budgetOwnerIct = $request -> input("Budget_owner_ict");
        $baselineBudget = $request -> input("Baseline_budget");
        $baselineFacturen = $request -> input("Baseline_facturen");
        $start = $request -> input("Start");
        $finish = $request -> input("Finish");

        $roadmap = new \App\Models\Roadmap();


        $roadmap -> Budgetcode = $budgetcode;
        $roadmap -> Domein = $domein;
        $roadmap -> Epicnr = $epicnr;
        $roadmap -> Projectname = $projectname;
        $roadmap -> Budget_owner_business = $budgetOwnerBusiness;
        $roadmap -> Budget_owner_ict = $budgetOwnerIct;
        $roadmap -> Baseline_budget = $baselineBudget;
        $roadmap -> Baseline_facturen = $baselineFacturen;
        $roadmap -> Start = $start;
        $roadmap -> Finish = $finish;

        $roadmap ->save();


        


    }

    // function validate(Request $request){
    //     $rules = [
    //         "Budgetcode" => "required",
    //         "Domein" => "required",
    //         "Epicnr" => "required",
    //         "Projectname" => "required",
    //         "Budget_owner_business" => "required",
    //         "Budget_owner_ict" => "required",
    //         "Baseline_budget" => "required|integer",
    //         "Baseline_facturen" => "required|integer",
    //         "Start" => "required|date",
    //         "Finish" => "required|date",
    //         "Start" => "required",
    //         "Comments" => "string|nullable"
    //     ];

    //     $result = $request -> validate($rules);
             
    //     return $result;



    // }

}
