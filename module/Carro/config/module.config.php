<?php

return [
    'router' => [
        'routes' => [
            'carro-home'=> [
                'type' => 'Literal',
                'options' => [
                    'route' => '/carro',
                    'defaults' => [
                        'controller' => 'Carro\Controller\Carro',
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],
    
    'controllers' => [
        'invokables' => [
            'Carro\Controller\Carro' => 'Carro\Controller\CarroController'
        ]
    ],
    
    'service_manager' => [
        'invokables' => [
            'Service\Carro' => 'Carro\Service\CarroService'
        ]
    ],
    
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view'
        ]
    ]
    
];
