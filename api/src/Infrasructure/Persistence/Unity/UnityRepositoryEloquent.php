<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Unity;

use App\Application\Models\Unity;
use App\Domain\Unity\UnityRepository;

class UnityRepositoryEloquent implements UnityRepository
{    
    public function getAllUnits(): array
    {
        $units = Unity::all();
        foreach ($units as $unity) {
            $resources = Unity::find($unity->id)->resources;
            if (count($resources) > 0) {
                $unity->resources = $resources;
            }
            $tags = Unity::find($unity->id)->tags;
            if (count($tags) > 0) {
                $unity->tags = $tags;
            }
        }
        return $units->toArray();
    }
}