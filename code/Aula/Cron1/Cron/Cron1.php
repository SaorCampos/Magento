<?php

namespace Aula\Cron1\Cron;
use Psr\Log\LoggerInterface;

class Aula_Cron1
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute()
    {
        $this->logger->info('Cron1 rodadndo');
    }
}
