<?php
declare(strict_types=1);

namespace App\Infrastructure\DBModels;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\DBModels\Tag;

class TagRule extends Model
{
    protected $table = 'tag_rule';
    protected $fillable = ['tag_id', 'name', 'body', 'priority'];

    public function rules()
    {
      return $this->hasMany(Tag::class);
    }
}