<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    
    public function EnvironmentTest()
    {
       $youtube = env('youtube');

       self::assertEquals('agung timotius sinaga', $youtube);
    }
}
