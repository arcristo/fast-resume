<?php

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

$app->match('/', function (Request $request) use ($app) {
    // default form data
    $data = array(
        'user' => null,
    );

    $form = $app['form.factory']->createBuilder(FormType::class, $data)
        ->add('user')
        ->add('submit', SubmitType::class, [
            'label' => 'Open',
        ])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $data = $form->getData();

        return $app->redirect('https://www.linkedin.com/in/' . $data['user']);
    }

    // display the form
    return $app['twig']->render('default/index.html.twig', array('form' => $form->createView()));
})
    ->method('GET|POST')
    ->bind('homepage');

return $app;
