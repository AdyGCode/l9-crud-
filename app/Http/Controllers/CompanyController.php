<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $name = "Fred Bloggs";
        return view("companies.index",
            compact(['companies', 'name']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO: Get country list from Countries table
        // TODO: Add country to the view data for dropdown
        return view("companies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'name'=>['min:1','max:192','unique:companies,name'],
            'address'=>['required'],
            'email'=>['min:5', 'email','unique:companies,email'],
            'country_code'=>['min:3','max:3',],
        ];

        $validated = $request->validate($rules);

        $newCompanyData = [
            'name' => $validated['name'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'country_code' => $validated['countryCode'],
        ];
        $newCompany = Company::create($newCompanyData);
        return redirect()->route('companies')
            ->with('success',
                "Company { $newCompany->name } created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact(['company']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return Response
     */
    public function edit(Company $company)
    {
        return view("companies.edit", compact(['company']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'=>['min:1','max:192',
//                'unique:companies,name'
            ],
            'address'=>['required'],
            'email'=>['min:5', 'email',
//                'unique:companies,email'
            ],
            'countryCode'=>['min:3','max:3',],
        ];

        $validated = $request->validate($rules);

        $companyData = [
            'name' => $validated['name'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'country_code' => $validated['countryCode'],
        ];

        Company::find($id)->update($companyData);

        return redirect()->route('companies.index')
            ->with('success','Company updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
