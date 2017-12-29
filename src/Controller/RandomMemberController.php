<?php

// src/Controller/RandomMemberController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// extends Symfony's base Controller class:
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RandomMemberController extends Controller {

  /**
  * @Route("/random-member/{max}")
  */

  public function randomNamePicker($max) {

    $memberContainer = array("Marin", "Matia", "Mihaela", "Mladen");
    $pickedMember = $memberContainer[ array_rand( $memberContainer ) ];

    $number = mt_rand(0, $max);

    return $this->render('random-member.html.twig', array(
      'pickedMember' => $pickedMember,
      'number' => $number,
    ));


  }
}
