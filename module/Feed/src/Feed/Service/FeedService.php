<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Zend\Feed\Reader\Reader;

namespace Feed\Service;

/**
 * Description of FeedService
 *
 * @author walter
 */
class FeedService extends \Zend\Feed\Reader\Reader{
    //put your code here
    
    public function getFeed($uri)
    {
        try {
            $rss = $this->import('http://g1.globo.com/dynamo/brasil/rss2.xml');
        } catch (Zend\Feed\Reader\Exception\RuntimeException $e) {
            echo "Não consegui ler este feed: {$e->getMessage()}\n";
            exit;
        }

        //sobre o canal
        $channel = array(
            'title'       => $rss->getTitle(),
            'link'        => $rss->getLink(),
            'description' => $rss->getDescription(),
            'items'       => array()
            );

        //os feeds
        foreach ($rss as $item) {
            $channel['items'][] = array(
                'title'       => $item->getTitle(),
                'link'        => $item->getLink(),
                'description' => $item->getDescription()
                );
        }

        return $channel;
    }
}
