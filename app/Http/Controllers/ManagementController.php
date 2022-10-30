<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Item;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::where('stock_type', 1)->get();
        $freezeItems = Item::where('stock_type', 9)->get();

        // 冷蔵庫
        foreach($items as $item){
            // 期限表示メッセージを作成
            $expirationStr= date('y.m.d',  strtotime($item->expiration));
            if($item->expiration_type == 1){
                $expirationType = "賞味期限";
            }else{
                $expirationType = "消費期限";
            }
            $item['msg'] = $expirationType." ".$expirationStr;
        }

        // 冷凍庫
        foreach($freezeItems as $freezeItem){
            // 期限表示メッセージを作成
            $expirationStr= date('y.m.d',  strtotime($freezeItem->expiration));
            if($freezeItem->expiration_type == 1){
                $expirationType = "賞味期限";
            }else{
                $expirationType = "消費期限";
            }
            $freezeItem['msg'] = $expirationType." ".$expirationStr;
        }

        return view('index', compact('items', 'freezeItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::insert([
            'name' => $request->itemName,
            'expiration' => $request->expiration,
            'expiration_type' => $request->expirationType,
            'stock_type' => $request->stockType,
            'created_at' => now()
         ]);
        return redirect('managements');
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
        $data = item::findOrFail($id);

        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = item::find($request->id);
        $data->name = $request->itemName;
        $data->expiration_type = $request->expirationType;
        $data->stock_type = $request->stockType;
        $data->expiration = $request->expiration;
        $data->save();
        return redirect('managements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('managements');
    }
}
