<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreQuestion;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $questions = Questions::select('*');
            return DataTables::of( $questions)
                ->addColumn('action', function ( $questions) {
                    return '
                            <button type="button" data-id="' .  $questions->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $questions->id . '" data-title="' .  $questions->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.question.index');
        }
    }

    public function create()
    {
        return view('Admin.question.create');
    }

    public function store(StoreQuestion $request)
    {
        $inputs = $request->all();

        if(Questions::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Questions $question)
    {
        return view('Admin.question.edit', compact('question'));
    }

    public function update(StoreQuestion $request, Questions $question)
    {
        if($question->update($request->all()))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $questions = Questions::where('id', $request->id)->first();
        $questions->delete();
        return response(['message' => 'Question Deleted successfully', 'status' => 200], 200);
    }
}
