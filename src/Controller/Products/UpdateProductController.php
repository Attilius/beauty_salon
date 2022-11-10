<?php

namespace App\Controller\Products;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateProductController extends AbstractController
{
    /**
     * @Route("/admin/product/edit/{id}", name="app_update_product")
     * @IsGranted("ROLE_ADMIN")
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('/products/update_product.html.twig', []);
    }
}