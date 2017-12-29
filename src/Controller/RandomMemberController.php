<?php

// src/Controller/RandomMemberController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomMemberController {

  /**
  * @Route("/random-member")
  */

  public function randomNamePicker() {

    $memberContainer = array("Marin", "Matia", "Mihaela", "Mladen");

    $pickedMember = $memberContainer[ array_rand( $memberContainer ) ];


    return new Response(
      '<html>
        <body>
          <h1>' . $pickedMember . '</h1>
        </body>
      </html>'
    );
  }
}
