<?php

namespace Gourmet\CommonMark\Model\Behavior;

use Cake\ORM\Behavior;
use Gourmet\CommonMark\Utility\CommonMarkAwareTrait;

class CommonMarkBehavior extends Behavior
{
    use CommonMarkAwareTrait;
}
