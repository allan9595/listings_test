<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase{

     /** @test */
     public function listPremiumGetStatusReturnValidData()
     {
        $list_premium = new ListingPremium($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>'premium',
            'description'=>'the description of the list'
        ]);
        $this->assertEquals('premium', $list_premium->getStatus());
     }

     /** @test */
     public function listPremiumGetDescriptionReturnValidData()
     {
        $list_premium = new ListingPremium($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>'premium',
            'description'=>'the description of the list'
        ]);
        $this->assertEquals('the description of the list', $list_premium->getDescription());
     }

     /** @test */
     public function listPremiumDisplayAllowedTags()
     {
        $list_premium = new ListingPremium($data = [
            'id'=>1,
            'title'=>'hello'
        ]);
        $this->assertEquals('&lt;p&gt;&lt;br&gt;&lt;b&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;', $list_premium->displayAllowedTags());
     }
}

?>