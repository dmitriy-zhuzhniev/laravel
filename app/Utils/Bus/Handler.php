<?php

namespace App\Utils\Bus;

interface Handler
{
    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return mixed
     */
    public function handle(Command $command);
}