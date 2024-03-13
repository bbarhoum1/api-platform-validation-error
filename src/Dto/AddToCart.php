<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

readonly class AddToCart
{
    public function __construct(
        #[NotBlank(message: 'not_blank')]
        public int $productId,
        #[NotBlank(message: 'not_blank')]
        #[Positive()]
        public int $quantity,
    ) {
    }
}
