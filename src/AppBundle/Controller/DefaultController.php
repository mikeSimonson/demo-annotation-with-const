<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sort;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="homepage")
     * @QueryParam(map=true, name="sort", requirements=@Sort, allowBlank=false, default={Sort::DEFAULT_FIELD : Sort::DEFAULT_ORDER})
     */
    public function testAction(ParamFetcher $paramFetcher)
    {
        // replace this example code with whatever you need
        return $this->render('test/index.html.twig', ['sort'=> $paramFetcher->get('sort')]);
    }
}
