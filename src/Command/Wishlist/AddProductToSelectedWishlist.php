<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusWishlistPlugin\Command\Wishlist;

use BitBag\SyliusWishlistPlugin\Entity\WishlistInterface;
use Sylius\Component\Core\Model\ProductInterface;

final class AddProductToSelectedWishlist implements AddProductToSelectedWishlistInterface
{
    public function __construct(
        private string $token,
        private int $productId,

    ) {
    }

    public function getWishlistToken(): string
    {
        return $this->token;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }
}
