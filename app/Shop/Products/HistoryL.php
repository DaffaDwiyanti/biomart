<?php

namespace App\Shop\Products;

use App\Shop\Categories\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryL extends Model
{

    use SoftDeletes;

    public $table = 'history_logistics';
    

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'id',
            'productID',
            'total',
            'activity',
             'activityID',
    ];

    protected $casts = [
            'id'=> 'integer',
            'productID' => 'string',
            'total'=> 'integer',
            'activity' => 'string',
            'activityID' => 'string',
    ];
}
