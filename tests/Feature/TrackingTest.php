<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrackingTest extends TestCase
{
    /** @test **/
    public function test_example()
    {
        $response = $this->get('/?v=h&t=l&a=p');

        $response->assertStatus(200);

    }
}
