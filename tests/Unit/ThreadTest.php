<?php

namespace Tests\Unit;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// I commented because it did not work
//use PHPUnit\Framework\TestCase;

// Its Work!!
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;


    /** @test  */

    public function a_thread_has_replies()
    {
        $thread = Thread::factory()->create();

        $this->assertInstanceOf(Collection::class,$thread->replies);
    }
}
