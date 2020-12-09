<?php
declare(strict_types=1);

namespace App\Infrastructure\DBModels;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\DBModels\Unity;
use App\Infrastructure\DBModels\TagRule;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['name', 'value'];

    public function units()
    {
      return $this->hasMany(Unity::class);
    }

    public function rules()
    {
      return $this->belongsToMany(TagRule::class);
    }
}