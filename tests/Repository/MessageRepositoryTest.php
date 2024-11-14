<?php
declare(strict_types=1);

namespace App\Tests\Repository;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MessageRepositoryTest extends KernelTestCase
{
    public function test_it_has_connection(): void
    {
        self::bootKernel();

        // Get the database connection and check if it's connected
        $connection = self::getContainer()->get(Connection::class);
        /** @var Connection $connection */
        $this->assertTrue($connection->isConnected());

        $messageRepository = self::getContainer()->get(MessageRepository::class);

        //Check if repository is correctly injected
        $this->assertInstanceOf(MessageRepository::class, $messageRepository);

        $this->assertSame([], $messageRepository->findAll());
        $this->assertSame([], $messageRepository->findBy(['status' => 'sent']));

    }

}