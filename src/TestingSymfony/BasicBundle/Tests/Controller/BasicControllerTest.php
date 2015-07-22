<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TestingSymfony\BasicBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicControllerTest extends WebTestCase {

    public function testHello() {
        $client = static::createClient();
        $crawler = $client->request('GET', '/helloworld');
        $result = $crawler->filter('html:contains("hi")')->count();
        $expected = 0;
        //$this->assertGreaterThan($expected,$result);
        //$this->assertCount(1,$crawler->filter('h1'));
        //$this->assertNotEmpty(array('dd'));
        //$this->assertTrue($client->getResponse()->isSuccessful());
        //$this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }

    public function testHelloContent() {
        $client = static::createClient();
        $crawler = $client->request('GET', '/helloworld');
        //$h1 = $crawler->filter('h1')->eq(0);
        $p1 = $crawler->filter('p')->first();

            $ul = $p1->siblings()->eq(1);
            $l1 = $ul->children()->first();
            $l2 = $ul->children()->eq(1);
            $l3 = $ul->children()->last();
            
            $this->assertEquals('dddd',$l1->text());





        //$p2 = $crawler->filterXPath("//p")->last();
    }

    public function testingAddingContent() {
//        $client = static::createClient();
//        $crawler = new \Symfony\Component\DomCrawler\Crawler();
//        $crawler->addHtmlContent("<p class='para'>added via</p>");
//
//        $p1 = $crawler->filter('p')->first()->text();
//        $this->assertRegExp('/via/', $p1);
//        $p1Class = $crawler->filter('p')->attr('class');
//        $this->assertEquals('para', $p1Class);
    }

    public function testForms() {
        $client = static::createClient();
        $crawler = $client->request('GET', '/helloworld');

        $form = $crawler->selectButton('send')->form();
        $uri = $form->getUri();
        $this->assertRegExp('/localhost/',$uri);
        
        $method = $form->getMethod();
        $this->assertEquals('GET',$method);
        
        $form['name'] = "Ahmed";
        $crawler = $client->submit($form);
        $data = $form->getPhpValues();
        $expected = array('name'=>'Ahmed','send'=>'send');
        $this->assertEquals($expected,$data);
    
        
        
        
        //////2vvv

        
    }

}
