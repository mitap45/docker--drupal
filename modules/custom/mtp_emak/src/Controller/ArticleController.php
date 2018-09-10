<?php

namespace Drupal\mtp_emak\Controller;

class ArticleController{
  public function page() {

    $items = array(
      array('title' => 'Article 1'),
      array('title' => 'Article 2'),
      array('title' => 'Article 3'),
      array('title' => 'Article 4'),

    );


    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => 'Our article list',
    );
  }
}
