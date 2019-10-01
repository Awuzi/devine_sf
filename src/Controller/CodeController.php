<?php

namespace App\Controller;

use App\Services\Devine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodeController extends AbstractController {
    /**
     * @Route("/code/{i}*{histo}", name="code")
     * @param $histo
     * @return Response
     */


    public function index($histo = null) {

        $i = rand(0, 30);

        $devine = new Devine($i, array(...));
        if ($devine->isWinner()){

        }
        if (isset($i)) {
            $iChoixJoueur = (int)$i;
        } else {
            $iChoixJoueur = -1;
        }
        if (empty($histo)) {
            $histo = '';
            for ($a = 0; $a < 30; ++$a) {
                if ($a == $i) {
                    $histo .= 'w';
                } else
                    $histo .= "-";
            }
        }
        if ($iChoixJoueur >= 0 && $iChoixJoueur < strlen($histo)) {
            $histo[$iChoixJoueur] = 'x';
        }

        return $this->render('code/index.html.twig', ['aTrouve' => $i, 'histo' => $histo]);
    }
}