<?php
declare(strict_types=1);

namespace App\Domain\Resource;

use JsonSerializable;

class Resource implements JsonSerializable
{
    private int $entityId;

    private string $resourceName;

    private int $resourceValue;

    private string $resourceValueName;

    public function __construct(int $entityId, string $resourceName, int $resourceValue, string $resourceValueName)
    {
        $this->entityId = $entityId;
        $this->resourceName = strtolower($resourceName);
        $this->resourceValue = strtolower($resourceValue);
        $this->resourceValueName = strtolower($resourceValueName);
    }

    public function getResourceName(): string
    {
        return $this->name;
    }

    public function getResourceValue(): int
    {
        return $this->value;
    }

    public function getResourceValueName(): string
    {
        return $this->valueName;
    }

    public function jsonSerialize()
    {
        return [
            'entity_id' => $this->entityId,
            'name' => $this->resourceName,
            'value' => $this->resourceValue,
            'value_name' => $this->resourceValueName
        ];
    }
}