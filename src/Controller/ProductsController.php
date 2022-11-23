<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="app_products")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('products/index.html.twig', []);
    }

    #[Route('/products/lipstick', name: 'app_product')]
    public function showProduct(Product $product): Response
    {
        return $this->render('products/product.html.twig', [
            "product" => $product
        ]);
    }
}
