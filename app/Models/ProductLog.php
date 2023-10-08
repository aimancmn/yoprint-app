<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLog extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * This is optional since we already following laravel naming standard.
     *
     * @var string
     */
    protected $table = 'product_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename',
        'data_count',
        'duration_in_miliseconds',
        'raw_data',
        'raw_data_rejected',
    ];
}
