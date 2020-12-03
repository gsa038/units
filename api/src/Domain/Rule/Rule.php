<?php
declare(strict_types=1);

namespace App\Domain\Rule;

use JsonSerializable;

class Rule extends JsonSerializable
{
    private int $tagId;

    private string $ruleName;

    private string $ruleBody;

    private int $rulePriority;

    public function __construct(int $tagId, string $ruleName, string $ruleBody, int $rulePriority)
    {
        $this->tagId = $tagId;
        $this->ruleName = $ruleName;
        $this->ruleBody = $ruleBody;
        $this->rulePriority = $rulePriority;
    }

    public function getTagId(): int
    {
        return $this->tagId;
    }

    public function getRuleName(): string
    {
        return $this->name;
    }

    public function getRuleBody(): string
    {
        return $this->body;
    }

    public function getRulePriority(): int
    {
        return $this->priority;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'tag_id' => $this->tagId,
            'name' => $this->ruleName,
            'body' => $this->ruleBody,
            'priority' => $this->rulePriority
        ];
    }
}