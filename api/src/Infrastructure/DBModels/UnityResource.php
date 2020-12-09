<?php
declare(strict_types=1);

namespace App\Infrastructure\DBModels;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\DBModels\Unity;

class Resource extends Model
{
    protected $table = 'unity_resource';
    protected $fillable = ['unity_id', 'resource_name', 'value', 'value_name'];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}