<?php

class ExampleTest extends FeatureTestCase
{
    public function test_basic_example()
    {
        $name = 'Diego Ticona Ramos';
        $email = 'diego@dtic.com';
        //No depender de datos aleatorios en las pruebas
        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => $email,
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see($name)
             ->see($email);
    }
}
