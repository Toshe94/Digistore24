<?php
declare(strict_types=1);

namespace App\Controller;

use App\Message\SendMessage;
use App\Repository\MessageRepository;
use Controller\MessageControllerTest;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Regex;
use function Psl\Type\string;

/**
 * @see MessageControllerTest
 * TODO: review both methods and also the `openapi.yaml` specification
 *       Add Comments for your Code-Review, so that the developer can understand why changes are needed.
 */
class MessageController extends AbstractController
{
    /**
     * TODO: cover this method with tests, and refactor the code (including other files that need to be refactored)
     */

    /**
     * This method is modified, I've removed the iteration because symfony is offering better way to handle properties
     * using the Serializer component
     */
    #[Route('/messages')]

    public function list(Request $request, MessageRepository $messageRepository, SerializerInterface $serializer): Response
    {
        try {
            // Get data from the repository
            $messages = $messageRepository->by($request);

            // Serialize the data with the specified groups
            $data = $serializer->serialize($messages, 'json', ['groups' => 'messages']);

            // Return the serialized data as JSON response
            return new JsonResponse($data, Response::HTTP_OK,['Content-Type' => 'application/json'],true);

        }catch(\Exception $exception){
            return new JsonResponse(['error' => 'An unexpected error occurred: '.$exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/messages/send', methods: ['GET'])]
    public function send(Request $request, MessageBusInterface $bus): Response
    {
        $text = (string)$request->query->get('text');

        if (!$text) {
            return new Response('Text is required', 400);
        }

        $bus->dispatch(new SendMessage($text));

        return new Response('Successfully sent', 204);
    }
}