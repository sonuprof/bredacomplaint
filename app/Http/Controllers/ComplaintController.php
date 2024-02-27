<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Complaint;
use Session;

class ComplaintController extends Controller
{
    public function add_complaint()
    {

        return view('complaint.add-complaint');
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $complaint = new complaint();
        $complaint->district = $request->district;
        $complaint->block = $request->block;
        $complaint->village  = $request->village;
        $complaint->complaint  = $request->complaint;
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->created_by = $created_by;
        $complaint->save();
        return back()->with('status', 'Complaint Added Successfully');
    }



    public function view_complaint(Request $request)
    {
        $data = DB::table('complaints')->paginate(50);
        return view('complaint.view-complaint', compact('data'));
    }

     public function edit($id)
    {
        $data['complaint'] = Complaint::find($id);
        return view('complaint.update-complaint', $data);
    }

    public function update(Request $request)
    { 
        $id = $request->id;
        $Complaint = Complaint::find($id);     
                
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $Complaint->image = $filename;
            $Complaint->status = 1;


        }
        
        $Complaint->save();
        return redirect(route('view-complaint'))->with('status', 'Complaint Closed Successfully');
    }


}
