<?php
declare(strict_types=1);

namespace App\Domain\Unity;

use App\Domain\Unity\Unity;

interface UnityRepository
{
    public function __construct();

    public function createUnity(array $unity): Unity;

    /**
     * @throws UnityNotFoundException
     */
    public function findUnityWithName(string $name): Unity;

    /**
     * @throws UnityNotFoundException
     */
    public function findUnityWithId(int $id): Unity;

    /**
     * @return Unity[]
     * @throws UnitiesNotFoundException
     */
    public function getAllUnities() : array;
}
