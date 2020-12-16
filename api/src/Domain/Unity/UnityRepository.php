<?php
declare(strict_types=1);

namespace App\Domain\Unity;

interface UnityRepository
{
    public function getAllUnits(): array;
}