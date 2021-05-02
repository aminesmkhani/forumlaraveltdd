<?php

namespace Tests\Feature;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Testing\DatabaseMigrations;;
use Tests\TestCase;

class CreateThreadsTest extends TestCase
{

    use DatabaseMigrations;

    /** @test  */

    function guests_may_not_create_threads()
    {
        $this->withoutExceptionHandling();
        $this->expectException(AuthenticationException::class);

        $thread = Thread::factory()->make();

        $this->post('/threads', $thread->toArray());
    }


    /** @test  */

    function an_authenticated_user_can_create_new_forum_threads()
    {

        $this->signIn();

        $thread = Thread::factory()->make();

        $this->post('/threads', $thread->toArray());

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
