<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Doctrine\Common\Collections\Collection;

#[AsController]
class GetAllOrders extends AbstractController
{
    public function __invoke(User $data): Collection
    {
        return $data->getOrders();
    }
}
