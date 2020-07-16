<?php

declare(strict_types=1);

namespace CaptainsPlayground\GitHook\Message;

use CaptainHook\App\Hook\Message\Rule\Base;
use SebastianFeldmann\Git\CommitMessage;

class StartWithValidPrefixBase extends Base
{
    /**
     * Defines the hint message the old way
     */
    public function __construct()
    {
        $this->hint = 'Your commit message has to start with "ARRG!"';
    }

    /**
     * @param CommitMessage $msg
     * @return bool
     */
    public function pass(CommitMessage $msg): bool
    {
        return strpos($msg->getContent(), 'ARRG!') === 0;
    }
}
