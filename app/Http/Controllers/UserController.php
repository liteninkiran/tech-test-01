<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Currency;
use App\Models\ExchangeRate;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserGetRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::with('currency')->get();
        return $users;
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
     * @param  App\Http\Requests\UserCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request) {
        return User::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(UserGetRequest $request, User $user) {
        $driver = $request->driver ? $request->driver : 'internal';

        $currencyTo = Currency::where('code', '=', $request->currency)->first();
        $currencyFrom = Currency::where('id', '=', $user->currency_id)->first();

        $rate = ExchangeRate::query()
            ->where('currency_to', '=', $currencyTo->id)
            ->where('currency_from', '=', $currencyFrom->id)
            ->first();

        $multiplier = $rate ? $rate->exchange_rate : 1;

        return response()->json([
            'name' => $user->name,
            'hourly_rate' => $user->hourly_rate * $multiplier,
            'currency_code' => $currencyTo->code,
            'currency_name' => $currencyTo->name,
        ]);
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
     * @param  App\Http\Requests\UserUpdateRequest  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user) {
        $user->update($request->validated());
        return $user;
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
