<?php

namespace App\Controller;

use App\Model\RoverPhotosManager;
use App\Model\FlyManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fly = array_map('trim', $_POST);

            if (empty($fly['provenance'])) {
                $errors[] = "Veuillez selectionner une planète de départ !";
            }

            if (empty($fly['arrivee'])) {
                $errors[] = "Veuillez selectionner une planète d'arrivée !";
            }

            if (empty($fly['depart'])) {
                $errors[] = 'La date de départ est obligatoire !';
            }
            if (empty($fly['retour'])) {
                $errors[] = 'Vous avez que 60% de chances de mourir, donc prévoyez le retour ! ';
            }

            if (empty($errors)) {
                $flyManager = new flyManager();
                $flyManager->insert($fly);
                $flights = $flyManager->selectAll();
                return $this->twig->render(
                    'Home/prices.html.twig',
                    [
                        'flights' => $flights,
                    ]
                );
            }
        }
        $roverPhotosManager = new RoverPhotosManager();
        $rover = $roverPhotosManager->getAll();
        return $this->twig->render('Home/index.html.twig', [
            'rover' => $rover,
            'errors' => $errors
        ]);
    }

    public function notFound(): string
    {
        return $this->twig->render('Home/error.html.twig');
    }
}
