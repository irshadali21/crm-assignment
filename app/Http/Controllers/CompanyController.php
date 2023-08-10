<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\DataTables\CompanyDataTable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CompanyDataTable $CompanyDataTable)
    {
        return    $CompanyDataTable->render('companies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view = view('companies.create')->render();
        return response(['success' => true, 'title' => 'Create New Company', 'data' => $view]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = $logo->store('company_logo', 'public');
            $request['logo_path'] = $logoPath;
        }
        $company = new Company([
            'name' => $request['name'],
            'email' => $request['email'],
            'logo' => $request['logo_path'] ?? null,
            'website' => $request['website'] ?  $request['website'] : null,
        ]);
        $company->save();

        return response()->json(['message' => 'Company created successfully', 'tableReload' => true, 'success' => true,], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $view = view('companies.show', compact('company'))->render();
        return response(['success' => true, 'title' => 'Company Details', 'data' => $view]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $view = view('companies.edit', compact('company'))->render();
        return response(['success' => true, 'title' => 'Edit Company Details', 'data' => $view]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->name = $request->name;
        $request->email ? $company->email = $request->email : '';
        $request->website ?  $company->website = $request->website : '';

        if ($request->hasFile('logo')) {
            if ($company->logo) {
                Storage::delete($company->logo);
            }
            $logo = $request->file('logo');
            $logoPath = $logo->store('public/company_logo');
            $company->logo = $logoPath;
        }
        $company->save();

        return response()->json(['message' => 'Company Updated successfully', 'tableReload' => true, 'success' => true,], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['message' => 'Company Deleted successfully', 'tableReload' => true, 'success' => true,], 201);

    }
}
