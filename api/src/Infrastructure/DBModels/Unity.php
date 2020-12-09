<?php
declare(strict_types=1);

namespace App\Infrastructure\DBModels;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\DBModels\UnityResource;
use App\Infrastructure\DBModels\Tag;

class Unity extends Model
{
    protected $table = 'unity';
    protected $fillable = ['name'];

    public function resources()
    {
        return $this->hasMany(UnityResource::class);
    }

    public function tags()
    {
      return $this->hasMany(Tag::class);
    }
    

}