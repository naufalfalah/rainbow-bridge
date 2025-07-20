<?php

return [
    '' => ['controller' => 'HomeController', 'method' => 'index'],
    'login' => ['controller' => 'LoginController', 'method' => 'index'],
    'login/authenticate' => ['controller' => 'LoginController', 'method' => 'authenticate'],
    'logout' => ['controller' => 'LoginController', 'method' => 'logout'],

    'order/create' => ['controller' => 'OrderController', 'method' => 'create'],
    
    'admin' => ['controller' => 'AdminController', 'method' => 'index'],
    'admin/generate' => ['controller' => 'AdminController', 'method' => 'generate'],

    'admin/services/create' => ['controller' => 'ServiceController', 'method' => 'create'],
    'admin/services/edit' => ['controller' => 'ServiceController', 'method' => 'edit'],
    'admin/services/delete' => ['controller' => 'ServiceController', 'method' => 'delete'],

    'admin/testimonies/create' => ['controller' => 'TestimonyController', 'method' => 'create'],
    'admin/testimonies/edit' => ['controller' => 'TestimonyController', 'method' => 'edit'],
    'admin/testimonies/delete' => ['controller' => 'TestimonyController', 'method' => 'delete'],

    'admin/faqs/create' => ['controller' => 'FaqController', 'method' => 'create'],
    'admin/faqs/edit' => ['controller' => 'FaqController', 'method' => 'edit'],
    'admin/faqs/delete' => ['controller' => 'FaqController', 'method' => 'delete'],
];