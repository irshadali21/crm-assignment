<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Company;
use App\DataTables\EmployeeDataTable;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeeDataTable $EmployeeDataTable)
    {
        return $EmployeeDataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::get();
        $view = view('employees.create', compact('companies'))->render();
        return response(['success' => true, 'title' => 'Create New Employee', 'data' => $view]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {

        $employee = new Employee([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'company_id' => $request['company_id'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);
        $employee->save();

        return response()->json(['message' => 'Employee created successfully', 'tableReload' => true, 'success' => true,], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $view = view('employees.show', compact('employee'))->render();
        return response(['success' => true, 'title' => 'Employee Details', 'data' => $view]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $companies = Company::get();
        $view = view('employees.edit', compact('employee', 'companies'))->render();
        return response(['success' => true, 'title' => 'Edit Employee Details', 'data' => $view]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $request->company_id ? $employee->company_id = $request->company_id : '';
        $request->email ? $employee->email = $request->email : '';
        $request->phone ? $employee->phone = $request->phone : '';


        $employee->save();

        return response()->json(['message' => 'Employee Updated successfully', 'tableReload' => true, 'success' => true,], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['message' => 'Employee Deleted successfully', 'tableReload' => true, 'success' => true,], 201);
    }
}
