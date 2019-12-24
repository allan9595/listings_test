<?php

require __DIR__ .'/../classes/ListingBasic.php';
use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function listBasicReceiveValidData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $list = new ListingBasic($data = []);
    }

    /** @test */
    public function listBasicReceiveValidId()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $list = new ListingBasic($data = [
            'id'=>NULL,
            'title'=>'shopping'
        ]);
        $list->setValues($data = [
            'id'=>NULL
        ]);
    }

    /** @test */
    public function listBasicReceiveValidTitle()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>NULL
        ]);
        $list->setValues($data = [
            'id'=>1,
            'title'=>NULL
        ]);
    }

    /** @test */
    public function listBasicCreateObject()
    {
        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello'
        ]);

        $this->assertIsObject($list);
    }

    /** @test */
    public function listBasicGetStatusReturnValidData()
    {
        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello'
        ]);

        $list->setStatus('');
        $this->assertEquals('basic', $list->getStatus());
    }

    /** @test */
    public function listBasicGetMethodReturnValidData()
    {
        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>''
        ]);

        $this->assertEquals(1, $list->getId());
        $this->assertEquals('hello', $list->getTitle());
        $this->assertEquals('http://www.teamtreehouse.com', $list->getWebsite());
        $this->assertEquals('test@test.com', $list->getEmail());
        $this->assertEquals('teamtreehouse', $list->getTwitter());
        $this->assertEquals('basic', $list->getStatus());
    }
}

?>