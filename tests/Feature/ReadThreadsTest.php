<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp() : void
    {
        parent::setUp();

        $this->thread = Thread::factory()->create();
    }

    /** @test */
    public function a_user_can_view_all_threads()
    {
        $response = $this->get('/threads')
            ->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_can_read_a_single_thread()
    {
        $this->get($this->thread->path())
          ->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_can_read_replies_that_are_associated_with_a_thread()
    {
        $reply = Reply::factory()
            ->create(['thread_id' => $this->thread->id]);

        $this->get($this->thread->path())
            ->assertSee($reply->body);
    }
}
