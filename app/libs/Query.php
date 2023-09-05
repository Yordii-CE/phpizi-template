<?php

namespace App\Libs;

/**
 * Class Query
 *
 * This class is used to execute SQL queries on a database using PDO.
 * It provides methods for executing queries, fetching results, and counting affected rows.
 *
 * @package YourPackage
 */
class Query
{
    /**
     * @var PDO The database connection.
     */
    private $connection;

    /**
     * Query constructor.
     *
     * @param Database $database An instance of the Database class representing the database connection.
     */
    public function __construct($database)
    {
        $this->connection = $database->connect();
    }

    /**
     * Execute an SQL query.
     *
     * @param string $query The SQL query to execute.
     * @param array $params (Optional) Parameters for the prepared query.
     * @return PDOStatement The resulting PDOStatement object.
     */
    public function execute($query, $params = [])
    {
        $PDOStatement = $this->connection->prepare($query);
        $PDOStatement->execute($params);
        return $PDOStatement;
    }

    /**
     * Fetch all records from a query.
     *
     * @param string $query The SQL query to execute.
     * @param array $params (Optional) Parameters for the prepared query.
     * @return array An array of records fetched from the database.
     */
    public function fetchAll($query, $params = [])
    {
        $PDOStatement = $this->execute($query, $params);
        $records = $PDOStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $records;
    }

    /**
     * Execute a query and return the number of affected rows.
     *
     * @param string $query The SQL query to execute.
     * @param array $params (Optional) Parameters for the prepared query.
     * @return int The number of rows affected by the query.
     */
    public function executeAffectedRows($query, $params = [])
    {
        $PDOStatement = $this->execute($query, $params);
        return $PDOStatement->rowCount();
    }
}
