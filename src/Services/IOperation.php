<?php
/**
 * Calculates the result after applying the operation to the operands.
 */

namespace App\Services;

interface IOperation
{
    /**
     * For example, 'Add' Operation will return for operands 5 and 6 the value 11 (5 + 6 = 11)
     * 
     * @param $operation string Type of operation
     * @param $operatorA float First operator
     * @param $operatorB float Second operator
     * 
     * @return float The result of operation or Exception
     */
    function calculate( string $operation, float $operatorA, float $operatorB ): float;
}