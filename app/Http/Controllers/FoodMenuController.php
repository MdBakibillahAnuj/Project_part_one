<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    private $categories;
    private $foods;
   public function addFood()
   {
       return view('admin.food_menu.add-food',[
           'categories' => CategoryModel::all(),
       ]);
   }
   public function newFood(Request $request)
   {
       FoodMenu::saveData($request);
       return redirect()->back()->with('message','Menu Added Successfully');
   }
   public function manageFood()
   {
       return view('admin.food_menu.manage-food',[
           'foods' => FoodMenu::all(),
       ]);
   }
   public function deleteFood($id)
   {
      $food = FoodMenu::findOrFail($id);
      if(file_exists($food->image))
      {
          unlink($food->image);
      }
      $food->delete();
      return redirect()->back()->with('message', 'Food Menu Delete Successfully');
   }
   public function statusFood($id)
   {
       $food = FoodMenu::findOrFail($id);
       $food->status = $food->status == 1 ? 0 : 1;
       $food->save();
       return redirect()->back()->with('message', 'Status Change Successfully');
   }
   public function editFood($id)
   {
       $this->foods = FoodMenu::find($id);
       $this->categories = CategoryModel::all();
       return view('admin.food_menu.edit-food',[
           'foods' => $this->foods,
           'categories' => $this->categories,
       ]);
   }
   public function updateFood(Request $request)
   {
      return $request;
   }
}
