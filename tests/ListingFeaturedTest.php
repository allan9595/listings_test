<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase{

     /** @test */
     public function listFeaturedGetStatusReturnValidData()
     {
        $list_featured = new ListingFeatured($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>'featured',
            'description'=>'the description of the list'
        ]);
        $this->assertEquals('featured', $list_featured->getStatus());
     }

     /** @test */
     public function listFeaturedCocReturnValidData()
     {
        $list_featured = new ListingFeatured($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>'featured',
            'description'=>'the description of the list',
            'coc'=>'test coc'
        ]);
        $this->assertEquals('test coc', $list_featured->getCoc());
     }
}

?>