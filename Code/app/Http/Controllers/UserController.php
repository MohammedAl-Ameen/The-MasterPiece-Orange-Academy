<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\brand;
use App\Models\appeal;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function showProfile(user $user)
    {

        $products = user::find($user["id"])->get_product;

        return view("profile", ['user' => $user, 'products' => $products]);
    }


    public function showAppeal(user $user)
    {
        $products = user::find(session()->get('loginId'))->get_product;
        $appeals = array();
        foreach ($products as $product) {

            if (count(product::findOrFail($product["id"])->get_appeal) != 0)
                array_push($appeals, product::findOrFail($product["id"])->get_appeal);
        }

        foreach ($appeals as $temp)
            foreach ($temp as $appeal) {
                $appeal["product_name"] = product::find($appeal["product_id"])["name"];
                $appeal["phone"] = user::find($appeal["user_id"])["phone"];
            }


        return view(
            "appeal",
            ["appeals" => $appeals]
        );
    }

    /**
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function showUserList(user $user)
    {
        return view("account", ['user' => $user]);
    }

    public function createProduct()
    {
        $categories = category::get();
        $brands = brand::get();
        return view("addproduct", [
            "categories" => $categories, "brands" => $brands
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view("profileedit", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserRequest  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $form = $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "phone" => "required",
            "email" => "required",
            "city" => "required",


        ]);

        if ($request["password"] != null)
            $form["password"] = Hash::make($request["password"]);

        if ($request["image"] != null) {
            $imageName = time() . "." . $request->image->extension();
            $request->image->move(public_path('assets/images/user'), $imageName);
            $imagePath = 'assets/images/user/' . $imageName;
            $form["image_url"] = $imagePath;
        }

        $user->update($form);

        return redirect("/user/" . $user["id"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
