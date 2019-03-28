<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public static function bread(){
        return static::where('category_id', 1)->get();
    }
    
    public static function drinks(){
        return static::where('category_id', 2)->get();
    }
    
    //назва таблиці
    protected $table = 'goods';
    
    //ключ таблиці id
    protected $primaryKey = 'id';
    
    protected $fillable = ['img'];


    //немає колонок 'created_at' u 'update_up'
    public $timestamps = false;
    
    //поляя які можна змінювати
    protected $filable = ['price', 'hot_offer'];
}
