<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;


    /** @test  */

    public function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->be($user = User::factory()->create());
        $thread = Thread::factory()->create();
        $reply = Reply::factory()->make();
        $this->post($thread->path().'/replies', $reply->toArray());
        $this->get($thread->path())->assertSee($reply->body);
    }
}
