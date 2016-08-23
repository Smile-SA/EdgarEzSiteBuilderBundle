<?php

namespace EdgarEz\SiteBuilderBundle\Service\Task;


class CustomerTaskService implements TaskInterface
{
    private $message;

    public function __construct()
    {
    }

    public function validateParameters($parameters)
    {
    }

    public function execute($command, array $parameters)
    {
        switch ($command) {
            case 'generate':
                try {
                    $this->validateParameters($parameters);
                } catch (\Exception $e) {
                    $this->message = $e->getMessage();
                    return false;
                }
                break;
            default:
                break;
        }

        return true;
    }

    public function getMessage()
    {
        return $this->message;
    }

}
