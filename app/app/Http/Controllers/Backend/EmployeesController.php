<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Employees;
use File;
use Image;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::orderBy('id','asc')->get();
        return view('backend.pages.employee.manage',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new Employees();
        $employees->fullname = $request->fullname;
        $employees->gender = $request->gender;
        $employees->company = $request->company;
        $employees->slug =Str::slug($request->fullname);
        $employees->phone = $request->phone;
        $employees->address = $request->address;
        $employees->email = $request->email;
        $employees->group = $request->group;
        $employees->status = $request->status;
        if($request->image){
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/assets/images/employee/'.$img);
            Image::make($image)->save($location);
            $employees->image = $img;

        }
        $employees->save();
        return redirect()->route('employee.manage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::find($id);
        if(!empty($employee)){
            return view('backend.pages.employee.edit',compact('employee'));
        }
        else{
            return redirect()->route('employee.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employees = Employees::find($id);
        $employees->fullname = $request->fullname;
        $employees->gender = $request->gender;
        $employees->company = $request->company;
        $employees->slug =Str::slug($request->fullname);
        $employees->phone = $request->phone;
        $employees->address = $request->address;
        $employees->email = $request->email;
        $employees->group = $request->group;
        $employees->status = $request->status;
        if(!empty($request->image)){
            if(File::exists('backend/assets/images/employee/'.$employees->image)){
                File::delete('backend/assets/images/employee/'.$employees->image);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/assets/images/employee/'.$img);
            Image::make($image)->save($location);
            $employees->image = $img;
        }
        $employees->save();
        return redirect()->route('employee.manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employees::find($id);
            if(File::exists('backend/assets/images/employee/'.$employee->image)){
                File::delete('backend/assets/images/employee/'.$employee->image);
            }

        $employee->delete();
        return redirect()->route('employee.manage');
    }
}
