<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
/**
 * TODO: Review Message class
 */
    /**
     * Removed setters for createdAt and uuid, now we set them in the constructor because they are generated from our side
     * now we set their values in the constructor.
     * For the createdAt property I think it would have been better if we use Gedmo component.
     * Added serialization groups for the properties: uuid, text, status. For the serialization group I prefer to use the route name.
     */
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::GUID, unique: true)]
    #[Groups('messages')]
    private string $uuid;

    #[ORM\Column(length: 255)]
    #[Groups('messages')]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups('messages')]
    private string $status;
    
    #[ORM\Column(type: 'datetime')]
    private DateTime $createdAt;
    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->uuid = Uuid::v6()->toRfc4122();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

}
