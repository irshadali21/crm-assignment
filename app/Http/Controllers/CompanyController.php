<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use App\DataTables\CompanyDataTable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
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
    public function store(CompanyRequest $request)
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = $logo->store('company_logo', 'public');
            $request['logo_path'] = $logoPath;
        }
        try {
            $company = new Company([
                'name' => $request['name'],
                'email' => $request['email'],
                'logo' => $request['logo_path'] ?? null,
                'website' => $request['website'] ?  $request['website'] : null,
            ]);
            $company->save();

            return response()->json(['message' => 'Company created successfully', 'tableReload' => true, 'success' => true,], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'success' => false]);
        }
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
    public function update(CompanyRequest $request, Company $company)
    {
        $company->name = $request->name;
        $request->email ? $company->email = $request->email : '';
        $request->website ?  $company->website = $request->website : '';

        try {
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
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'success' => false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['message' => 'Company Deleted successfully', 'tableReload' => true, 'success' => true,], 201);
    }

    public function sendDemoMail()
    {
        Mail::to('m.irshad.ali21@gmail.com')->send(new OrderShipped());

        dd("Mail has been sent successfully");
    }
}
