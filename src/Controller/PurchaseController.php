<?php

namespace App\Controller;

use App\Model\ItemManager;

class PurchaseController extends AbstractController
{
    public function purchase(): string
    {
        return $this->twig->render('Home/purchase.html.twig');
    }
}
