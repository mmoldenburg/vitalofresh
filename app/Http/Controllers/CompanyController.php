<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Auth::user()->is_admin;
        $userhub = Auth::user()->hub;

        if($admin == 0){
            return inertia(
                'Company/Index',
                [
                    'companies'=> Company::all()
                ]
            );
        }
        else {
            return inertia(
            'Company/Index',
            [
                'companies'=> Company::all()->where('hub', $userhub)->where('aktiv', 1)
            ]
        );
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Company/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Company::create(
            $request->validate([
                'kundenname' => 'required',
                'straße' => 'required',
                'hub' => 'required',
                'plz' => 'required',
                'ort' => 'required',
                'kontakt' => 'required',
                'telefon' => 'required',
                'aktiv' => 'required',
                'created_by' => 'required'
            ])
            );

        return redirect()->route('company.index')->with('success', 'Neuer Kontakt wurde gespeichert!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return inertia(
            'Company/Show',
            [
                'company'=> $company
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
