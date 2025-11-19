<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{

//view all
   public function view_inquiry()
    {


        $menuList = Inquiry::orderBy('id','asc')->get();

        return view ('admin.inquiry.index',compact('menuList'));
    }
      // Show single inquiry (read/view)
    public function show_inquiry($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('admin.inquiry.show', compact('inquiry'));
    }
    public function edit_inquiry($id){
//find and show 
    $inquiry= Inquiry::find($id);
    return view ('admin.inquiry.edit',compact('inquiry'));
  
}
public function update_inquiry(Request $request, $id)
    {
        try {
            // Validate input
           $validated = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'nullable|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|numeric|digits_between:6,15',
            'office'       => 'required|string|max:255',
            'destination'  => 'required|string|max:255',
            'exam_status'  => 'required|string|max:255',
            'funding'      => 'required|string|max:255',
            'message'      => 'nullable|string|max:2000',
        ]);

            // Find category and update name
            $inquiry = Inquiry::find($id);
            $inquiry->first_name = $request->first_name;
            $inquiry->last_name = $request->last_name;
            $inquiry->email = $request->email;
            $inquiry->phone = $request->phone;
            $inquiry->office = $request->office;
            $inquiry->destination = $request->destination;
            $inquiry->exam_status = $request->exam_status;
            $inquiry->funding = $request->funding;
            $inquiry->message = $request->message;
            $inquiry->save();

            return redirect(url('view_inquiry'))->with('success', 'Inquiry updated successfully!');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error updating inquiry: ' . $e->getMessage());
        }
    }
    public function destroy($id){
        //find id and delete data
        $menuList=Inquiry::find($id);//find
        $menuList->delete();//delete
        return redirect()->back();
    }
}
