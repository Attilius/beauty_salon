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

    public function test_setting_subtitle()
    {
        $article = new Article();

        $this->assertNull($article->getSubTitle());

        $article->setSubTitle("Article subtitle");
        $this->assertSame("Article subtitle", $article->getSubTitle());
    }

    public function test_setting_content()
    {
        $article = new Article();

        $this->assertNull($article->getContent());

        $article->setContent("Lorem ipsum dolor sit amet...");
        $this->assertSame("Lorem ipsum dolor sit amet...", $article->getContent());
    }
}