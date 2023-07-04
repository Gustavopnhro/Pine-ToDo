<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request){

        if ($request->date) {
            $filteredDate = $request->date;    
        } else {
            $filteredDate = date('Y-m-d');
        }
        
        $carbonDate = Carbon::createFromFormat('Y-m-d', $filteredDate);
        $data['date_as_string'] = $carbonDate->translatedFormat('d').' de '.ucfirst($carbonDate->translatedFormat('M'));
        $data['date_prev_button'] = $carbonDate->subDay(1)->format('Y-m-d');
        $data['date_next_button'] = $carbonDate->addDay(2)->format('Y-m-d');

        $data['authUser'] = Auth::user();
        $userId = auth()->user()->id;

        $data['tasks'] = Task::where('user_id', $userId)->whereDate('due_date', $filteredDate)->get();
        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();
        $data['done_tasks'] = $data['tasks']->where('is_done', true)->count();


        return view('home', $data);
    }
}
