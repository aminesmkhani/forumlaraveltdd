<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// I commented because it did not work
//use PHPUnit\Framework\TestCase;

// Its Work!!
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    /** @test  */
    function it_has_an_owner()
    {
        $reply = Reply::factory()->create();
        $this->assertInstanceOf(User::class, $reply->owner);
    }
}
