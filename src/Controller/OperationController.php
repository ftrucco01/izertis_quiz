<?php
/*
 * The responsability of this class is handle the Http requests.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\Operation;

class OperationController extends AbstractController
{
    /**
     * @var $operationService Operation
     */
    private $operationService;

    public function __construct(
        Operation $operation
    ){
        $this->operationService = $operation;
    }

    /**
     * @Route("/{operation}/{operatorA}/{operatorB}", name="add", methods={"GET"})
     */
    public function calculateAction( string $operation, float $operatorA, float $operatorB )
    {
        $result = $this->operationService
                            ->calculate(
                                $operation,
                                $operatorA,
                                $operatorB
                            );
        return new JsonResponse(
            [ 'result' => $result ]
        );
    }
}