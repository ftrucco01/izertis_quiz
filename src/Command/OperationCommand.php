<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Services\Operation;

class OperationCommand extends Command
{
    /**
     * The name of the command (the part after "bin/console")
     * 
     * @var $defaultName sring
     */
    protected static $defaultName = 'operations';

    /**
     * @var $operationService Operation
     */
    private $operationService;

    public function __construct
    (
        Operation $operation
    )
    {
        $this->operationService = $operation;
        
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Calculate an operation result.')
                ->addArgument('operatorA', InputArgument::REQUIRED)
                ->addArgument('operatorB', InputArgument::REQUIRED)
                ->addArgument('operartion', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $operation = $input->getArgument('operartion');
        $operatorA = (float)$input->getArgument('operatorA');
        $operatorB = (float)$input->getArgument('operatorB');

        $result = $this->operationService
        ->calculate(
            $operation,
            $operatorA,
            $operatorB
        );

        $output->writeln("Result: <fg=green>{$result} </>");
        return 0;
    }
}