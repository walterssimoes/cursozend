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
            'site-home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Site\Controller\Site',
                        'action'     => 'index',
                    ),
                ),
            )
            
        ),
    ),
    
    
    'controllers' => array(
        'invokables' => array(
            'Site\Controller\Site' => 'Site\Controller\SiteController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml'
        )
    )
    
);
