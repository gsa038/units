<?php
declare(strict_types=1);

namespace App\Application\Models;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $table = 'unity';
    protected $fillable = ['name'];
    protected $hidden = ['id', 'pivot'];
    protected array $resources;
    protected array $tags;

    public function resources()
    {
        return $this->hasMany(UnityResource::class)->select('resource_name', 'value', 'value_name');
    }

    public function tags()
    {
      return $this->belongsToMany(Tag::class, 'unity2tag', 'unity_id', 'tag_id');
    }
    

}