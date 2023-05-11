<?php

namespace App\Controller;

use App\Model\RoverPhotosManager;

class RoverPhotosController extends AbstractController
{
    public function rover()
    {
        $roverPhotosManager = new RoverPhotosManager();
        $rover = $roverPhotosManager->getAll();
        return $this->twig->render('Home/index.html.twig', [
            'rover' => $rover,
        ]);
    }
}
