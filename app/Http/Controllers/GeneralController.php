<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Subscriber;
use App\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\Constraint\ExceptionMessageTest;

class GeneralController extends Controller
{

    public function subscribe(Request $request)
    {
        return view('register')
            ->with('plan', $request->all());
    }

    public function checkout(Request $request)
    {

        $subscriber = Subscriber::create($request->except('plan_id', 'plan', '_token', 'amount', 'payment_method',
                'card_holder', 'card_number', 'expiration', 'cvv'));

        $email = $request->email;
        $plan = Plan::find($request->plan_id);
        $cost = $plan->cost;
        $amount = $cost * 360;

        $data = ['email' => $email, 'amount' => $amount];
        return view('paystack')
                ->with('data', $data);

    }

public function pay() {
        return view('paystack');
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
