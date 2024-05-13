<?php

namespace Modules\Category\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Category\App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Category\App\CategoryRepository\CategoryInterface;
use Exception;
use Modules\Category\App\Http\Requests\AddCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryinterface;

    public function __construct(Categoryinterface $categoryinterface)
    {
        $this->categoryinterface = $categoryinterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $alldata = $this->categoryinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        // return view('category::index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCategoryRequest $request)
    {
        try {
            $created_data = $this->categoryinterface->store($request->validated());
            return response()->json(['data' => $created_data]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(AddCategoryRequest $request, Category $id)
    {
        try {
            $updated_data = $this->categoryinterface->update($request->validated(),$id);
            return response()->json(['data'=>$updated_data]);

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Category $id)
    {
        $id->delete();
    }
}
