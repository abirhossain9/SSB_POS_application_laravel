<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::orderBy('id','asc')->get();
        return view('backend.pages.supplier.manage',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Suppliers();
        $supplier->company_name = $request->company_name;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->vat_number = $request->vat_number;
        $supplier->gst_number = $request->gst_number;
        $supplier->status = $request->status;
        $supplier->save();
        return redirect()->route('supplier.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Suppliers::find($id);
        if(!empty($supplier)){
            return view('backend.pages.supplier.edit',compact('supplier'));
        }
        else{
            return redirect()->route('supplier.manage');
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
        $supplier = Suppliers::find($id);
        $supplier->company_name = $request->company_name;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->vat_number = $request->vat_number;
        $supplier->gst_number = $request->gst_number;
        $supplier->status = $request->status;

        $supplier->save();
        return redirect()->route('supplier.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Suppliers::find($id);
        $supplier->delete();
        return redirect()->route('supplier.manage');
    }
}
