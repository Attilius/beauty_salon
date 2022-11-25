<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductGroupRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="app_products")
     * @return Response
     */
    public function index(ProductGroupRepository $productGroupRepository): Response
    {
        $product_groups = $productGroupRepository->findAll();

        return $this->render('products/index.html.twig', [
            "product_groups" => $product_groups
        ]);
    }

    #[Route('/products/{type}', name: 'app_product')]
    public function showProduct(ProductRepository $productRepository, string $type): Response
    {
        $prod = $productRepository->findAll();
        $selected_products = array();
        foreach ($prod as $item){
            if ($item->getType() === $type) {
                $selected_products[] = $item;
            }
        }
        return $this->render('products/product.html.twig', [
            "product" => $selected_products
        ]);
    }
}
