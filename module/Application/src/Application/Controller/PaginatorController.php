<?php

namespace Application\Controller;

use DoctrineModule\Paginator\Adapter\Selectable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;

class PaginatorController extends AbstractActionController
{
    private $em;

    public function indexAction()
    {
        $em = $this->getEm();
        $adapter = new Selectable($em->getRepository('Application\Model\Gerencia'));

        $paginator = new Paginator($adapter);
        $page = 1;
        if($this->params()->fromRoute('page')) $page = $this->params()->fromRoute('page');
        $paginator->setCurrentPageNumber((int)$page)
        ->setItemCountPerPage(5);

        return new ViewModel(array('paginator' => $paginator));
    }

    public function getEm()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }


}

