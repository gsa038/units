<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent;

use App\Application\Models\Unity;
use App\Domain\Unity\UnityRepository;

class UnityRepositoryEloquent implements UnityRepository
{    
    public function getAllUnits(): array
    {
        $units = Unity::all();
        foreach ($units as $unity) {
            $resources = Unity::find($unity->id)->resources->toArray();
            if (count($resources) > 0) {
                $unity->resources = $resources;
            }
            $tags = Unity::find($unity->id)->tags->toArray();
            if (count($tags) > 0) {
                $unity->tags = $tags;
            }
        }
        return $units->toArray();
    }
}