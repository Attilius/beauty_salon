<?php

namespace App\Controller\Products;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateProductController extends AbstractController
{
    /**
     * @Route("/admin/product/create", name="app_create_product")
     * @IsGranted("ROLE_ADMIN")
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('/products/create_product.html.twig', []);
    }
}