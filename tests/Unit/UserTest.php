<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use PhpParser\ErrorHandler\Collecting;
use Illuminate\Database\Eloquent\Collection;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function a_user_has_projects()
    {
        $user = factory('App\Models\User')->create();

        $this->assertInstanceOf(Collecting::class, $user->projects);
    }
}
