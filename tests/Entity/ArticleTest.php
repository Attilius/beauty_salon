<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function test_setting_title()
    {
        $article = new Article();

        $this->assertNull($article->getTitle());

        $article->setTitle("Article title");
        $this->assertSame("Article title", $article->getTitle());
    }
}