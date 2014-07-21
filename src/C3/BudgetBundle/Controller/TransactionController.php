<?php

namespace C3\BudgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TransactionController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('C3BudgetBundle:Transaction:index.html.twig', array('name' => $name));
    }
}
