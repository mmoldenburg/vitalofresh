<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Company;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return inertia(
            'Rent/Index',
            [
                'allrents' => DB::table('companies')
                    ->join('rents', 'companies.id', '=', 'rents.by_company_rents_id')
                    ->select('companies.*', 'rents.by_company_rents_id')
                    ->distinct('rents.by_company_rents_id')
                    ->get()
            ]);
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia(
            'Rent/Create');
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
    public function show($rent)
    {
        return inertia('Rent/Show');


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
