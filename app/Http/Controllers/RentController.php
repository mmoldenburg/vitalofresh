<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
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
                'Rent/Index',
                [
                    'rents'=> Company::all()

                ]
            );
        }
        else {
            return inertia(
            'Rent/Index',
            [
                'rents'=> Company::all()
                    ->where('hub', $userhub)
                    ->where('aktiv', 1)

            ]
        );
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $rent)
    {
        return inertia(
            'Rent/Show',
        [
            'rent'=> $rent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rent $rent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        //
    }
}
