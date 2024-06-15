<?php

it('can show a Category List', function(){
    // arrange &act
    $response = $this->get('/myboard/mycategories');

    // assertion
    $response->assertOk->get('/myboard/mycategories');

    // red -> refactor -> green

});

it('can show a Category entry form', function(){
    // $this->withoutExceptionHandling();

    // arrange & act
    $response = $this->get('/myboard/mycategories/create');

    // assertion
    $response->assertOk();
});

// it('gives validation error when blank form of Category of Post is submitted', function(){
//     // arrange
//     $payload = [
//         'name' => '',
//     ];

//     // act
//     $response = $this->post('/myboard/mycategories', $payload);

//     // assertion
//     $response->assertSessionHasErrors([
//         'name' => 'Please fill it up!',
//     ]);

// });

// it('can add a Category to existing list', function(){
//      // arrange
//      $payload = [
//         'name' => 'Category 06',
//     ];

//     $this->assertDatabaseCount('categories', 5);

//     // act
//     $response = $this->post('/myboard/mycategories', $payload);

//     // assertion
//     $response->assertRedirect('/myboard/mycategories');

//     $this->assertDatabaseHas('categories', $payload);

//     $this->assertDatabaseCount('categories', 6);
// });

todo('it ensure Category of Post Name is unique');
// it('ensure Category of Post Name is unique', function(){
//     // 
// });

// it('can load the Category of Post page', function(){
//     // arrange

//     // act
//     $response = $this->get('/myboard/mycategories');

//     // assert
//     $response->assertOk();

//     $response->assertSeeText('Total found 5 Category');

// });

todo('it can show a not found message when Category of Post list empty');

todo('it can update Category of Post');

todo('it can delete Category of Post Form');

// group, dataset, hook
