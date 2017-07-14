<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//     public function testBasicTest()
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
    public function sum($i,$a){
    	return $i+$a;
    }
    
    public function testBasicTest()
    {
    	$this->assertContains(4, [1, 2, 3]);
    	
    	//$this->assertTrue(true);
   
    }
    
    public function testPushAndPop()
    {
    	$stack = [];
    	$this->assertEquals(0, count($stack));
    	
    	array_push($stack, 'foo');
    	$this->assertEquals('foo', $stack[count($stack)-1]);
    	$this->assertEquals(1, count($stack));
    	
    	$this->assertEquals('foo', array_pop($stack));
    	$this->assertEquals(0, count($stack));
    }
}
