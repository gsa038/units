<?php
declare(strict_types=1);

namespace App\Application\Models;

use Illuminate\Database\Eloquent\Model;

class UnityResource extends Model
{
    protected $table = 'unity_resource';
    protected $fillable = ['unity_id', 'resource_name', 'value', 'value_name'];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}