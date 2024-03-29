<?php

namespace App\Controller;

use App\Service\PostService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Exception;

/**
 * @Route("", name="homepage_")
*/
class HomepageController extends AbstractController
{
    private $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $posts = $this->postService->getPostsList();

        return $this->render('homepage/index.html.twig', [
            'items' => $posts,
        ]);
    }
}
