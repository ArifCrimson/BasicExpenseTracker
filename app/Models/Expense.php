<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //

    protected $table = 'expenses';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'category_id', 'name', 'amount', 'price', 'total_price', 'description'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
