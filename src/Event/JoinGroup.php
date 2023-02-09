<?php

namespace AlexWestergaard\PhpGa4\Event;

use AlexWestergaard\PhpGa4\Model;
use AlexWestergaard\PhpGa4\Facade;

class JoinGroup extends Model\Event implements Facade\JoinGroup
{
    protected null|string $group_id;

    public function getName(): string
    {
        return 'join_group';
    }

    public function getParams(): array
    {
        return [
            'group_id',
        ];
    }

    public function getRequiredParams(): array
    {
        return [];
    }

    public function setGroupId(null|string $id)
    {
        $this->group_id = $id;
        return $this;
    }
}
