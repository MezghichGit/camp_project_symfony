<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SettingsRepository;
use App\Repository\SliderRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SettingsRepository $settingsRepository, SliderRepository $sliderRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'settings' => $settingsRepository->findAll(),
            'sliders'=>$sliderRepository->findAll()
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(SettingsRepository $settingsRepository): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
            'settings' => $settingsRepository->findAll(),
        ]);
    }
}
