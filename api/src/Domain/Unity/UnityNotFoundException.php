<?php
declare(strict_types=1);

namespace App\Domain\Unity;

use App\Domain\DomainException\DomainRecordNotFoundException;

class UnityNotFoundException extends DomainRecordNotFoundException
{
    public $message = "Requested unity not found.";
}