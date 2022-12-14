<?php

namespace App\Tests;

use App\Entity\Blogpost;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre('titre')
                  ->setDate($datetime)
                  ->setContenu('contenu')
                  ->setSlug('slug');

        $this->assertTrue($blogpost->getTitre()==='titre');
        $this->assertTrue($blogpost->getDate()===$datetime);
        $this->assertTrue($blogpost->getContenu()==='contenu');
        $this->assertTrue($blogpost->getSlug()==='slug');
    }

    public function testIsFalse()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre('titre')
                  ->setDate($datetime)
                  ->setContenu('contenu')
                  ->setSlug('slug');

        $this->assertFalse($blogpost->getTitre()==='false');
        $this->assertFalse($blogpost->getDate()=== new DateTime());
        $this->assertFalse($blogpost->getContenu()==='false');
        $this->assertFalse($blogpost->getSlug()==='false');
    }

    public function testIsEmpty()
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getDate());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
    }
}
