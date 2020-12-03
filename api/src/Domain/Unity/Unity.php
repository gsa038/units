<?php
declare(strict_types=1);

namespace App\Domain\Unity;

use App\Domain\Resource\Resource;
use App\Domain\Tag\Tag;
use JsonSerializable;

class Unity implements JsonSerializable
{
    private int $id;

    private string $name;

    /**
     * @var Resource[]
     */
    private array $resources;

    /**
     * @var Tag[]
     */
    private array $tags;

    /**
     * @param Resource[]    $resources
     * @param Tag[]    $tags
     */
    public function __construct(?int $id, string $name, ?array $resources = [], ?array $tags = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->resources = $resources;
        $this->tags = $tags;
    }

    public function getUnityId(): ?int
    {
        return $this->id;
    }

    public function getUnityName(): string
    {
        return $this->name;
    }

    /**
     * @return Resource[]
     */
    public function getUnityResources(): array
    {
        return $this->resources;
    }

    /**
     * @return Tag[]
     */
    public function getUnityTags(): array
    {
        return $this->tags;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            '$resources' => $this->resources,
            '$tags' => $this->tags,
        ];
    }
}
