<?php

namespace App\Services\Migrators;

use Illuminate\Support\Collection;

abstract class Migrator
{
    /**
     * Convert migration data to a 2FAccounts collection.
     *
     * @param  mixed  $migrationPayload
     * @return \Illuminate\Support\Collection The converted accounts
     */
    abstract protected function migrate(mixed $migrationPayload) : Collection;


    /**
     * Pad a string to 8 chars min
     */
    protected function padToValidBase32Secret(string $string)
    {
        return str_pad($string, 8, '=');
    }

}
