<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin_employeelist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin_employeeregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $message=[
            'required' => 'This credential field is required!'
        ];
        {
        $request->validate([
            'employeename' => 'required',
            'occupation' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $message);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        employees::create($input);
        return redirect()->route('admin_employeelist')
                        ->with('success','Artist Registered Successfully.');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(employees $employees)
    {
        //
             //
                $data= employees::all();
                return view ('pages.admin_employeelist', ['employees'=>$data]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(employees $employees, $id)
    {
        //
           //
           $data=employees::find($id);
           return view ('pages.admin_employeeupdate',['employees'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, employees $employees)
    {
        //
               //
        $message=[
                'required' => 'This credential field is required!'
            ];
            $request->validate([

            'employeename' => 'required',
            'occupation' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',

        ],$message);
        
    $employees=employees::find($request->id);
    $employees->employeename=$request->employeename;
    $employees->occupation=$request->occupation;    
    $employees->phonenumber=$request->phonenumber;
    $employees->email=$request->email;
    $employees->save();
    
           
    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }else{
        unset($input['image']);
    }
      
    $employees->update($input);
    return redirect()->route('admin_employeelist')
                    ->with('success','Artist Credentials Updated Successfully');
    }

          /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function employeeprofile_view()
    {
        //
                //
            return view('pages.admin_employee_profile_view');
     }
      /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function employeecredentials(employees $employees , $id)
    {
        //
                //
                $employees=employees::find($id);
                return view ('pages.admin_employee_profile_view', ['employees'=>$employees]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(employees $employees, $id)
    {
            //
            $employees=employees::find($id);
            $employees->delete();
            return redirect()->route('admin_employeelist')
            ->with('success', 'Employee , Removed Successfully');
    }
}
