<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Tools\Singleton;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * Les activites stockés sous forme json dans la variable de sessions sont renvoyés sous forme d'Object
     * @Route("/api/activites", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getActivities()
    {
        // Ouvre la variable de session
        $session = new Session();

        $session->start();

        // Récupère les activites stocké dans la variable de session ( obligé de décoder )
        $activites = array();
        foreach($session->get('activites') as $a)
        {
            $activites[] = json_decode($a);
        }

        return $this->json($activites);
    }

    /**
     * @Route("api/activites/addActivites")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function setActivities(Request $request)
    {
        // Ouvre la variable de session
        $session = new Session();

        $session->start();


        // Récupère les activites contenu dans la variable de session
        $activites = array();
        if($session->has('activites'))
        {
            $activites = $session->get('activites');
        }

        // Récupère les éléments de la variable POST
        $data = json_decode($request->getContent(), true);

        // Incrémente le compteur d'activités ( local )
        $id = -1;
        if($session->has('id'))
        {
            $id = $session->get('id');
        }
        $id++;
        $session->set('id', $id);

        // Créé l'activité
        $activite = new Activite($id);
        $activite->setNom($data['nom']);

        // Fixe la durée de l'activité
        $time= new \DateTime();
        $time->setTime(explode(":", $data['duree'])[0],explode(":", $data['duree'])[1]);
        $activite->setDuree($time);

        // Fixe le Met de l'activité
        $activite->setMet(1.3); // TODO a aller chercher dans BDD

        $activites[] = json_encode($activite);

        $session->set('activites', $activites);

        return $this->json($activite);
    }

    /**
     * @Route("/api/activites/delActivites")
     */
    public function delActivites(Request $request)
    {
        // Ouvre la variable de session
        $session = new Session();

        $session->start();

        // Récupère les éléments de la variable POST
        $data = json_decode($request->getContent(), true);

        // Récupère les activites contenu dans la variable de session
        $activites = array();
        foreach($session->get('activites') as $a)
        {
            // Si l'id de l'activité a supprimer, alors on ne l'ajoute pas
            if($data["id"] !== json_decode($a, true)["id"])
            {
                $activites[] = $a;
            }
        }

        // Fixe la nouvelle liste d'activités
        $session->set('activites', $activites);

        return $this->json($activites);
    }


    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
