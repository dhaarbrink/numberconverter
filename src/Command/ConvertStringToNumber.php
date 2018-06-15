<?php
declare(strict_types=1);

namespace Nm\Command;

use Nm\Convert\StringToNumber;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertStringToNumber extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('convert:string-to-number')
            ->setDescription('Converts a string like \'honderdduizend tweehonderd drie en vijftig\' to 100.253')
            ->addArgument('input', InputArgument::REQUIRED, 'The input string');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $input = $input->getArgument('input');

        $tokens_nl = include __DIR__ . '/../../resources/data/tokens_nl.php';
        $tokens_en = include __DIR__ . '/../../resources/data/tokens_en.php';
        $tokens = array_merge($tokens_nl, $tokens_en);

        $converter = new StringToNumber($tokens, $input);

        $result = $converter->convert();

        $output->writeln($result);
    }
}
