<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'pending';
    case InProgress = 'in progress';
    case Completed = 'completed';

    public function label(): string
    {
        return trans('statuses.'.$this->value);
    }
}
