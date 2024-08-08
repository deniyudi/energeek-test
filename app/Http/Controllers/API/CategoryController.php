<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiHelperTrait;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    use ApiHelperTrait;
    public function index()
    {
        $todos = Category::all();
        return $this->sendResponse($todos, 'success', 200);
    }
}
