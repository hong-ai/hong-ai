<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
   public function update(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }

	//只允许作者删除    
    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }
}
