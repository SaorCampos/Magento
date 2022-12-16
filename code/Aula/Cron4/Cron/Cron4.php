<?php

namespace Aula\Cron4\Cron;
use Psr\Log\LoggerInterface;

class Aula_Cron4
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute()
    {
        $this->logger->info('Cron4 rodadndo');
    }
}
