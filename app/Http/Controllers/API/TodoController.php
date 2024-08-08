<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiHelperTrait;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{

    use ApiHelperTrait;
    public function index()
    {
        $todos = Task::all();
        return $this->sendResponse($todos, 'success', 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'todos' => 'required',

        ], [
            'name.required' => 'Nama harus diisi',
            'name.unique' => 'Nama sudah terdaftar',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'todos.required' => 'Tado harus diisi',
        ]);

        if ($validator->fails()) {
            return $this->failsValidate($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        $data_user = User::find($user->id);
        $data_user['created_by'] = $user->id;
        $data_user['updated_by'] = $user->id;
        $data_user->save();

        foreach ($request->todos as $todo) {
            $new_task = Task::create([
                'user_id' => $user->id,
                'category_id' => $todo['category_id'],
                'description' => $todo['description'],
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ]);
        }

        return $this->sendResponse($new_task, 'success', 200);
    }
}
