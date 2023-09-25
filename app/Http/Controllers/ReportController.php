<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function index() : View
    {
        $reports=DB::table('reports')->get();

        return view('report.index',[
           'reports'=>$reports
        ]);
    }

    public function delete($id)    {
        DB::table('reports') ->where('id', $id)->delete();
        return redirect()->to('/reports')->with('message', 'Delete success');
    }

    public function create(){
        return view('report.create');
    }

    public function edit($id){
        $report=DB::table('reports')->find($id);
        if (!$report){
            abort(404);
        }
        return view('report.edit',[
            'report'=>$report,
            ]);
    }

    public function store(StoreReportRequest $request)    {
        // store in db
        DB::table('reports')->insert([
        'title' => $request->title,
        'body' => $request->body,
        ]);
        return redirect()->to('/reports')->with('message', 'Successful add new report.');
    }

    public function update(UpdateReportRequest $request,$id)    {
        // store in db
        DB::table('reports')->where('id',$id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->to('/reports')->with('message', 'Successful edit report.');
    }


}
