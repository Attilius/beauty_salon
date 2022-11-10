<?php

namespace App\Controller\Products;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProductController extends AbstractController
{
    /**
     * @Route("/admin/product/delete/{id}", name="app_delete_product")
     * @IsGranted("ROLE_ADMIN")
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('/products/delete_product.html.twig', []);
    }
}