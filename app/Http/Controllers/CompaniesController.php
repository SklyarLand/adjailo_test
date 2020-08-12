<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $companies = Company::all();
        return view('content.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('content.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (Company::create($data))
            return view('responses.success', [
                'message' => 'Новая компания внесена в базу.',
                'back_url' => '/companies']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при добавлении новой компании.',
                'back_url' => '/companies/create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('content.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('content.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $input = $request->all();
        $company->update($input);
        if ($company->save())
            return view('responses.success', [
                'message' => 'Данные компании изменены.',
                'back_url' => '/companies']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при изменении компании.',
                'back_url' => "/companies/$id/edit"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        if ($company->delete())
            return view('responses.success', [
                'message' => 'Компания удалена из базы.',
                'back_url' => '/companies']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при удалении компании.',
                'back_url' => "/companies/$id/edit"]);
    }
}
