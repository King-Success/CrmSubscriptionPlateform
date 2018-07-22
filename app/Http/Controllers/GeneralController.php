<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\Constraint\ExceptionMessageTest;

class GeneralController extends Controller
{

    public function subscribe(Request $request) {
        return view('register')
                    ->with('plan', $request->all());
    }

    public function checkout(Request $request) {
         try {
             $subscriber = Subscriber::create($request->except('plan_id', 'plan', '_token', 'amount', 'payment_method',
                 'card_holder', 'card_number', 'expiration', 'cvv'));
         }catch(QueryException $e){
//             return Redirect::to('/subscription/subscribe');
             dd($e->getMessage());
         }

//        hand over payment to paystack to handle

          $plan_id = $request->plan_id;
          $subscriber_id = $subscriber->id;
          $active = true;
          $subscriptionArray = ['plan_id' => $plan_id, 'subscriber_id' => $subscriber_id, 'active' => $active];
          $subscription = Subscription::create($subscriptionArray);
          dd($subscription);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
        //
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
    }
}
