<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\survey;
use Illuminate\Support\Facades\DB;
use Session;

class SurveyController extends Controller
{
    public function add_survey()
    {

        return view('survey.add-survey');
    }

    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'contact' => 'required|min:10|max:10',

        ], [
            'contact.min' => 'Contact must be  10 digits .',
            'contact.max' => 'Contact must not exceed 10 digits.',
        ]);

        $created_by = $request->session()->get('loginName');
        $survey = new Survey();
        $survey->site_name = $request->site_name;
        $survey->site_address = $request->site_address;
        $survey->landmark  = $request->landmark;
        $survey->cr_contact  = $request->cr_contact;
        $survey->contact = $request->contact;
        $survey->pro_cap = $request->pro_cap;
        $survey->latitude = $request->latitude;
        $survey->longitude = $request->longitude;
        $survey->type_load  = $request->type_load;
        $survey->connection  = $request->connection;
        $survey->meter_conn  = $request->meter_conn;
        $survey->ca_no  = $request->ca_no;
        $survey->meter_no  = $request->meter_no;
        $survey->sanc_load  = $request->sanc_load;
        $survey->insta_load  = $request->insta_load;
        $survey->grid_avail  = $request->grid_avail;
        $survey->all_three  = $request->all_three;
        $survey->phase_miss  = $request->phase_miss;
        $survey->btdb  = $request->btdb;
        $survey->exist_dg_set  = $request->exist_dg_set;
        $survey->roof_cndtn = $request->roof_cndtn;
        $survey->total_roof  = $request->total_roof;
        $survey->free_space_install  = $request->free_space_install;
        $survey->free_space_control = $request->free_space_control;
        $survey->earth_pit  = $request->earth_pit;
        $survey->age_build  = $request->age_build;
        $survey->roof_access = $request->roof_access;
        $survey->roof_hght  = $request->roof_hght;
        $survey->parapet_hght  = $request->parapet_hght;
        $survey->no_floor = $request->no_floor;
        $survey->access_site = $request->access_site;
        $survey->dis_mainroad = $request->dis_mainroad;
        $survey->created_by = $created_by;
        $survey->save();
        return back()->with('status', 'Survey Added Successfully');
    }



    public function view_survey(Request $request)
    {
        $data = DB::table('surveys')->paginate(50);
        return view('survey.view-survey', compact('data'));
    }
}
