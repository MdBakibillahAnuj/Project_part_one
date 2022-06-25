<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\PersonalAccessToken;

class FoodMenu extends Model
{
    use HasFactory;
    protected $fillable = ['menu_name', 'category', 'price', 'image', 'description', 'status'];

    protected static $foodMenu;
    public static $image;
    public static $imageName;
    public static $directory;
    public static $imageUrl;

    public static function saveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/img/food-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;


        self::$foodMenu = new FoodMenu();
        self::$foodMenu->menu_name = $request->menu_name;
        self::$foodMenu->category = $request->category;
        self::$foodMenu->price = $request->price;
        self::$foodMenu->image = self::$imageUrl;
        self::$foodMenu->description = $request->description;
        self::$foodMenu->status = $request->status;
        self::$foodMenu->save();
    }
    public function cat()
    {
        return $this->belongsTo(CategoryModel::class,'category');
    }


}
