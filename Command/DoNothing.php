<?php declare(strict_types=1);

namespace MauticPlugin\MauticExampleBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DoNothing extends ContainerAwareCommand
{
    public const COMMAND = 'mautic:nothing:do';

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this->setName(self::COMMAND)
            ->setDescription('It does literaly nothing');
        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("I do nothing. And I look great doing it. (•̀ᴗ•́)و ̑̑");

        return 0;
    }
}
