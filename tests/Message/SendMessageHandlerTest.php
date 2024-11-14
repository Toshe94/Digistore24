<?php

namespace App\Tests\Message;

use App\Entity\Message;
use App\Message\SendMessage;
use App\Message\SendMessageHandler;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class SendMessageHandlerTest extends TestCase
{
    public function testSendMessage(): void
    {
        $entityManagerMock = $this->createMock(EntityManagerInterface::class);
        $message = new SendMessage('TestMessage');

        $entityManagerMock->expects($this->once())->method('persist');
        $entityManagerMock->expects($this->once())->method('flush');

        $sendMessageHandler = new SendMessageHandler($entityManagerMock);


        $sendMessageHandler($message);

    }
}