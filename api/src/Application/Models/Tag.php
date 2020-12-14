<?php
declare(strict_types=1);

namespace App\Application\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['name', 'value'];
    protected $hidden = ['pivot'];

    public function units()
    {
      return $this->belongsToMany(Unity::class, 'unity2tag', 'tag_id', 'unity_id');
    }

    public function rules()
    {
      return $this->belongsToMany(TagRule::class);
    }
}