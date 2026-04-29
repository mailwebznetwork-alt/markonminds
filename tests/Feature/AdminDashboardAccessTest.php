<?php

use App\Models\User;

it('redirects dashboard to admin for authenticated users', function () {
    $user = User::factory()->create([
        'name' => 'WDJERRIE',
        'email' => 'mail.webznetwork@gmail.com',
    ]);

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertRedirect('/admin');
});

it('shows authenticated user name on admin workspace header', function () {
    $user = User::factory()->create([
        'name' => 'WDJERRIE',
        'email' => 'mail.webznetwork@gmail.com',
    ]);

    $response = $this->actingAs($user)->get('/admin');

    $response->assertOk();
    $response->assertSee('MarkOnMinds');
    $response->assertSee('WDJERRIE');
});
