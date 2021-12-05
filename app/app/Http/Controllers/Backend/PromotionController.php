<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::orderBy('promotion_code','asc')->get();
        return view('backend.pages.promotion.manage',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = new Promotion();
        $promotion->promotion_code = $request->promotion_code;
        $promotion->prmotion_price = $request->prmotion_price;
        $promotion->start_date = $request->start_date;
        $promotion->end_date =  $request->end_date;
        $promotion->status = $request->status;
        $promotion->save();
        return redirect()->route('promotion.manage');
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
        $promotion = Promotion::find($id);
        if(!empty($promotion)){
            return view('backend.pages.promotion.edit',compact('promotion'));
        }
        else{
            return redirect()->route('promotion.manage');
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
        $promotion = Promotion::find($id);
        $promotion->promotion_code = $request->promotion_code;
        $promotion->prmotion_price = $request->prmotion_price;
        $promotion->start_date = $request->start_date;
        $promotion->end_date =  $request->end_date;
        $promotion->status = $request->status;
        $promotion->save();
        return redirect()->route('promotion.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect()->route('promotion.manage');
    }
}
