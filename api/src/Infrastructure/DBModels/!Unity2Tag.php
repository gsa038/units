<?php
declare(strict_types=1);

namespace App\Infrastructure\DBModels;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\DBModels\Tag;
use App\Infrastructure\DBModels\Unity;

class Unity2Tag extends Model
{
    protected $table = 'unity2tag';
    protected $fillable = ['unity_id', 'tag_id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function units()
    {
        return $this->belongsToMany(Unity::class);
    }
    
}