<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}


// it('can load the posts page', function () {
//     // arrange & act
//     $response = $this->get('/posts'); //red

//     // assert
//     $response->assertOk(); //green
//     $response->assertSeeText('Hello World!');

//     // red -> refactor -> green -> red -> green
// });

// It('can submit the form', function(){
//     // arrange
//     $request = [
//         'name' => 'Category 06',
//     ];

    // act
    // $response = $this->post('myboard.mycategories.create', $request);

    // $this->assertDatabaseHas('categories',  $request);

    // assert
    // $response->assertRedirect('myboard.mycategories.index');

    // assert -> red -> red ->

// });