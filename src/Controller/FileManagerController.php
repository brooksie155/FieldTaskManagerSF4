<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FileManagerController extends Controller
{
    /**
     * @Route("/file/manager", name="file_manager")
     */
    public function index()
    {
        return $this->render('file_manager/index.html.twig', [
            'controller_name' => 'FileManagerController',
        ]);
    }
}
