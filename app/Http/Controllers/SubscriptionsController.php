<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Subscription;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscription = Subscription::all();
        return $subscription;
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
        $subscription = new Subscription;
        $subscription->user_id = $request->user_id;
        $subscription->event = $request->event;
        $subscription->target_url = $request->target_url;
        $subscription->save();
        return "Success";
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
        return Subscription::find($id);
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
        //
        $subscription = Subscription::find($id);
        $subscription->event = $request->event;
        $subscription->target_url = $request->target_url;
        $subscription->save();
        return "Success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Subscription::destroy($id);
        return "Success";
    }
}
