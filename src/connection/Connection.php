<?php 

namespace Connection;

/**
 * Interface Connection
 */
interface Connection
{
    /**
     * seleciona no banco de dados
     *
     * @param string $dbString
     * @return void
     */
    public function select(string $dbString) : void;
}
