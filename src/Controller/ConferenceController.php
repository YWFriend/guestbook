<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);*/
        $great = '';
        if ($name = $request->query->get('hello')){
            $great = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }

        return new Response(<<<EOF
<html>
<body>
$great
<img src="/img/under-construction.gif" alt="">
</body>
</html>
EOF
        );
    }
}
