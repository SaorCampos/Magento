<?php

namespace Aula\Cron3\Cron;
use Psr\Log\LoggerInterface;

class Aula_Cron3
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute()
    {
        $this->logger->info('Cron3 rodadndo');
    }
}
