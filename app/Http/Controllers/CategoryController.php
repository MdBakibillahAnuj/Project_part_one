<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }
    public function manageCategory()
    {
        return view('admin.category.manage-category', [
            'category' => CategoryModel::all(),
        ]);
    }

    public function newCategory(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required',

        ]);
        $category = new CategoryModel();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back()->with('message', 'Category Add Successfully');
    }
    public function deleteCategory($id)
    {
        $category = CategoryModel::findOrfail($id);
        $category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');
    }
}
