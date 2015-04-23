<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'feeds' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/feed',
                    'defaults' => array(
                        'controller' => 'Feed\Controller\Feed',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
   
    'service_manager' => array(
        'invokables' => array(
            'Feed\Service\Feed' => 'Feed\Service\FeedService'
        )
    ),
    
    'controllers' => array(
        'invokables' => array(
            'Feed\Controller\Feed' => 'Feed\Controller\FeedController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ) 
);
