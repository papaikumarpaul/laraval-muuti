<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules;
use App\Models\Tenant;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Tenant');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TenantCreated');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   dd($request->all());
    $ValiDate = $request->validate([
        'name'=>'required|string|max:255',
        'domain'=>'required|string|max:255|unique:domains,domain',
        'email'=>'required|email|max:255',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);
    print_r($ValiDate);
    dd($ValiDate);
    $tenant =Tenant::create([$ValiDate]);
    $tenant->domains()->create([
        'domain'=>$ValiDate['domain'].'.'.config('app.domain')
    ]);
    return redirect('/Tenant')->with('status', 'Tenant created successfully!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
