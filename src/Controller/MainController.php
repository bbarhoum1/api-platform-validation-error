<?php

namespace App\Controller;

use App\Dto\AddToCart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/cart/add-product', name: 'cart_add_product', methods: ['POST'], format: 'json')]
class MainController extends AbstractController
{
    public function __invoke(
        #[MapRequestPayload] AddToCart $addTocCart,
    )
    {
        dump($addTocCart);
    }
}
