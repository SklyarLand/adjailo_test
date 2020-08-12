<?php

namespace App\Http\Controllers;

use App\Company;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $workers = Worker::all();
        return view('content.workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $companies = Company::all();
        return view('content.workers.create', compact('companies'));
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
        $data['fio'] = "${data['name']} ${data['surname']} ${data['patronymic']}";
        if (Worker::create($data))
            return view('responses.success', [
                'message' => 'Новая рабочий внесена в базу.',
                'back_url' => '/workers']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при добавлении нового рабочего.',
                'back_url' => '/workers/create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $worker = Worker::find($id);
        return view('content.workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $worker = Worker::find($id);
        $companies = Company::all();
        return view('content.workers.edit', compact('worker','companies'));
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
        $worker = Worker::find($id);
        $input = $request->all();
        $worker->update($input);
        if ($worker->save())
            return view('responses.success', [
                'message' => 'Данные работника изменены.',
                'back_url' => '/workers']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при изменении данных работника.',
                'back_url' => "/workers/$id/edit"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $worker = Worker::find($id);
        if ($worker->delete())
            return view('responses.success', [
                'message' => 'Рабочий удален из базы.',
                'back_url' => '/workers']);
        else
            return view('responses.fail', [
                'message' => 'Ошибка при удалении рабочего.',
                'back_url' => "/workers/$id/edit"]);
    }
}
