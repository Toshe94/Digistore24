<?php
declare(strict_types=1);

namespace Controller;

use App\Message\SendMessage;
use App\Repository\MessageRepository;
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Zenstruck\Messenger\Test\InteractsWithMessenger;

class MessageControllerTest extends WebTestCase
{
    use InteractsWithMessenger;
    private MockObject $messageRepository;
    function test_list(): void
    {
        $client = static::createClient();
        $client->request('GET', '/messages');

        $this->assertSame(200, $client->getResponse()->getStatusCode());

    }

    function test_list_with_parameter(): void
    {
        $client = static::createClient();
        $client->request('GET', '/messages',[
            'status'=>'sent'
        ]);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }
    
    function test_that_it_sends_a_message(): void
    {
        $client = static::createClient();
        $client->request('GET', '/messages/send', [
            'text' => 'Hello World',
        ]);

        $this->assertResponseIsSuccessful();
        // This is using https://packagist.org/packages/zenstruck/messenger-test
        $this->transport('sync')
            ->queue()
            ->assertContains(SendMessage::class, 1);
    }
}