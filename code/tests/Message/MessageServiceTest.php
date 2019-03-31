<?php

namespace App\Tests\Message;

use App\Message\MessageService;
use PHPUnit\Framework\TestCase;

class MessageServiceTest extends TestCase
{
    /**
     * @var MessageService
     */
    private $service;

    protected function setUp()
    {
        $this->service = new MessageService();
    }

    public function testGetMessage()
    {
        $message = $this->service->getMessage();

        $this->assertEquals('Hello Message!', $message);
    }
}
