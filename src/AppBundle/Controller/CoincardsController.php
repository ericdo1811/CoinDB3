<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\coin;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class CoincardsController extends Controller
{
    /**
     * @Route("/main/", name="CoinDB")
     */

    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('main/index.html.twig');
    }

    // /**
    //  * @Route("/main/create", name="CoinDB_create")
    //  */
    //
    // public function createAction(Request $request)
    // {
    //          die("Test");
    //     // replace this example code with whatever you need
    //     return $this->render('main/create.html.twig');
    // }
    //
    // /**
    //  * @Route("/main/main/edit/{id}", name="CoinDB_edit")
    //  */
    //
    // public function editAction($id, Request $request)
    // {
    //          die("Test");
    //     // replace this example code with whatever you need
    //     return $this->render('main/edit.html.twig');
    // }

    /**
     * @Route("/main/coincards", name="CoinDB_coincards")
     */


    public function coincardsAction()
    {
        // replace this example code with whatever you need
        return $this->render('main/coincards.html.twig');
    }

    /**
     * @Route("/main/tutorial", name="CoinDB_tutorial")
     */


    public function tutorialAction()
    {
        // replace this example code with whatever you need
        return $this->render('main/tutorial.html.twig');
    }

    /**
     * @Route("/main/stats", name="CoinDB_stats")
     */

    public function statsAction()
    {
        // replace this example code with whatever you need
        return $this->render('main/stats.html.twig');
    }

    /**
     * @Route("/main/extra", name="CoinDB_extra")
     */

    public function extraAction()
    {
             die("Test");
        // replace this example code with whatever you need
        return $this->render('main/extra.html.twig');
    }

    /**
     * @Route("/main/coincards", name="homepage2")
     */
    public function newAction(Request $request)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $coin = new coin();
        $coin->setName("Test");
        $coin->setWert(4);
        $coin->setPreis(5);
        $coin->setAufbID(1);
        $coin->setBesonderheiten("test");
        $coin->setJahr("2012");
        $coin->setGeschichte("test");
        $coin->setMotiv("test");
        $coin->setLID(2);
        $coin->setEID(2);
        $coin->setGwID(2);

        $form = $this->createFormBuilder($coin)
            ->add("name","text")
            ->add("wert","float")
            ->add("preis","float")
            ->add("Aufb_ID","integer")
            ->add("besonderheiten","string")
            ->add("jahr","integer")
            ->add("geschichte","string")
            ->add("motiv","string")
            ->add("L_ID","integer")
            ->add("E_ID","integer")
            ->add("G_ID","integer")
            ->add('save', 'submit', array('label' => 'Speichern'))
            ->getForm();
            return $this->render('default/coincards.html.twig', array(
                'form' => $form->createView(),
            ));
    }

    // if you have multiple entity managers, use the registry to fetch them
    public function editAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $em2 = $doctrine->getManager('other_connection');
    }
}
