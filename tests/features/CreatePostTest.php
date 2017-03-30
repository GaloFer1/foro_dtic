<?php

class CreatePostTest extends FeatureTestCase
{
    public function test_a_user_create_a_post()
    {
        //Having (teniendo una pregunta)
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';

        //Usuario que se conecta
        $this->actingAs($this->defaultUser());

        //When (eventos de la prueba)
        $this->visit(route('post.create'))
             ->type($title, 'title')
             ->type($content, 'content')
             ->press('Publicar');

        //Then (resultado)
        //para ver si el usuario fue creado correctamente en la base de datos
        $this->seeInDatabase('posts', [
             'title' => $title,
             'content' => $content,
             'pending' => true,
        ]);

        //Test user is redirect to the posts details after creating it.
        $this->seeInElement('h1', $title);
    }
}
