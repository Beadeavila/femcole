<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CRUDUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    /* public function test_listUserAppearInHomeView(){
        $this->withExceptionHandling();

        $users = User::factory(2)->create();
        $user = $users[0];

        $response = $this->get('/users');

        $response->assertSee($user->name);

        $response->assertStatus(200);
    } */

    public function test_anUserCanBeDeletedByAdminAndCanNotBeDeletedByAnUser(){
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1,User::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete($user->id);
        $this->assertCount(2,User::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete($user->id);
        $this->assertCount(2,User::all());
    }
}

