<?php

enum TaskStatus: string
{
    case Pending = 'pending';
    case InProgress = 'in progress';
    case Completed = 'completed';
}
