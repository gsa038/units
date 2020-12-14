<?php
declare(strict_types=1);

namespace App\Application\Models;

use Illuminate\Database\Eloquent\Model;

class TagRule extends Model
{
    protected $table = 'tag_rule';
    protected $fillable = ['tag_id', 'name', 'body', 'priority'];

    public function tags()
    {
      return $this->hasMany(Tag::class);
    }
}