<?php

namespace Aula\Cron2\Cron;
use Psr\Log\LoggerInterface;

class Aula_Cron2
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute()
    {
        $this->logger->info('Cron2 rodadndo');
    }
}
