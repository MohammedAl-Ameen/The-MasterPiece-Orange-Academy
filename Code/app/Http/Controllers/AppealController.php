<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\appeal;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreappealRequest;
use App\Http\Requests\UpdateappealRequest;

class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appeals = user::find(session()->get("loginId"))->get_appeal;
        foreach ($appeals as $appeal) {
            $appeal["product_name"] = product::find($appeal["product_id"])["name"];
        }
        return view("appealsends",  [
            "appeals" => $appeals
        ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data["user_id"] = $request["user_id"];
        $data["product_id"] = $request["product_id"];
        $appeal = new appeal($data);
        $appeal->save();

        return redirect("/product/" . $data["product_id"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreappealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function show(appeal $appeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function edit(appeal $appeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateappealRequest  $request
     * @param  \App\Models\appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateappealRequest $request, appeal $appeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(appeal $appeal)
    {
        $appeal->delete();

        return redirect("/sendedappeal");
    }
}
