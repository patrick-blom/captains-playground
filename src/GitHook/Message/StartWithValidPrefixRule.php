<?php

declare(strict_types=1);

namespace CaptainsPlayground\GitHook\Message;

use CaptainHook\App\Hook\Message\Rule;
use SebastianFeldmann\Git\CommitMessage;

class StartWithValidPrefixRule implements Rule
{

    /**
     * @return string
     */
    public function getHint(): string
    {
       return 'Your commit message has to start with "ARRG!"';
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
