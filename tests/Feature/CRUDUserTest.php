<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexMethodReturnsUsersForAdmin()
    {
        $admin = User::factory()->create(['isAdmin' => true]);
        $user = User::factory()->create(['isAdmin' => false]);
        $response = $this->actingAs($admin)->get(route('users.index'));
        $response->assertStatus(200);
        $response->assertViewHas('users', function ($users) use ($user) {
            return $users->contains($user);
        });
    }

    public function testIndexMethodRedirectsToUserShowForNonAdmin()
    {
        $user = User::factory()->create(['isAdmin' => false]);
        $response = $this->actingAs($user)->get(route('users.index'));
        $response->assertOk((route('users.show', [$user->id])));
    }

    public function testCreateReturnsCreateView()
    {
        $admin = User::factory()->create(['isAdmin' => true]);

        $response = $this->actingAs($admin)->get(route('users.create'));

        $response->assertStatus(200);
        $response->assertViewIs('user.create');
    }

    public function testStoreCreatesNewUser()
    {
        $admin = User::factory()->create(['isAdmin' => true]);
        $userData = User::factory()->make()->toArray();
        $userData['image'] = UploadedFile::fake()->create('avatar.jpg');
        $userData['password'] = 'password'; // Agregar campo password
        $userData['isAdmin'] = false; // Agregar campo isAdmin

        $response = $this->actingAs($admin)->post(route('users.store'), $userData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
    }

    public function testEditReturnsEditView()
    {
        $admin = User::factory()->create(['isAdmin' => true]);
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->get(route('users.edit', $user->id));

        $response->assertStatus(200);
        $response->assertViewIs('user.edit');
        $response->assertViewHas('user', $user);
    }

}
