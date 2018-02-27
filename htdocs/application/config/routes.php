<?php
/**
 * Routes.php
 */
return [

    // main page

    '' => [
    'controller' => 'main',
    'action' => 'index'],

    //account

    'account/login' => [
      'controller' => 'account',
      'action' => 'login'],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout'],


    //game
    'game/start' => [
      'controller' => 'game',
      'action' => 'start'
    ],

    // about

    'about/info' => [
        'controller' => 'about',
        'action' => 'info'
    ],

    //score

    'score/all' => [
        'controller' => 'score',
        'action' => 'all'
    ],

    //contact

    'contact/me' => [
        'controller' => 'contact',
        'action' => 'me'
    ]
];
