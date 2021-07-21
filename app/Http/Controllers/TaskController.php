<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::select('select * from tasks');
        return view('list', ['tasks' => $tasks]);
    }


    public function takeRequest(Request $request)
    {
        //
        //dd($request->all());  //to check all the datas dumped from the form
        $request->validate([
            'descriere' => 'required|string',
            'stare' => 'required|string',
        ]);
        $task = new Task([
            'descriere' => $request->descriere,
            'stare' => $request->stare,
        ]);

        $task->save();

        return response()->json([
            "message" => "Task inregistrat cu success",
            "task" => $task,
            "info" => "Reincarcati pagina pentru a vedea lista actualizata (Fara AJAX)"
        ], 201);
    }


    public function show($id)
    {
        $taskss = DB::table('tasks')
            ->where("id", $id)->get();

        return view('task_update', ['taskss' => $taskss]);
    }


    function list()
    {
        $data = Task::all();
        return view('list', ['tasks' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {
        $descriere = $request->input('descriere');
        $stare = $request->input('stare');
        $task = Task::find($id);
        $task->descriere = $descriere;
        $task->stare = $stare;
        $task->save();

        echo "Actualizare efectuata cu succes.";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

}
