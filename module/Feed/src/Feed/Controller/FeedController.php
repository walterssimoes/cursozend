<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Feed\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Feed\Service\Feed;

class FeedController extends AbstractActionController
{
    public function indexAction()
    {
        $feedService = $this->getServiceLocator()->get("Feed\Service\Feed");
        
        $feed = $feedService->getFeed("g1.com");
        
        return new ViewModel(['feed'=>$feed]);
    }
}
