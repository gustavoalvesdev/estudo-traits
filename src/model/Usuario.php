<?php 

namespace Model;

use Connection\Connection;

/**
 * Class Usuario
 */
class Usuario
{
    protected Connection $connection;

    /**
     * Construct
     *
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * retorna um usuário a partir de seu id
     *
     * @param integer $id
     * @return Usuario
     */
    public function findById(int $id) : Usuario 
    {
        $this->connection->select('...');

        return new Usuario($this->connection);
    }
}
