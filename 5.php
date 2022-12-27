<?php
interface Database
{
    public function executeQuery($query, $parameters);
}

class MySQLDatabase implements Database
{
    public function executeQuery($query, $parameters)
    {
        // Implementation for executing a query on a MySQL database
    }
}

class UserRepository
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function save(User $user)
    {
        $query = "INSERT INTO users (name, email) VALUES (?, ?)";
        $parameters = [$user->getName(), $user->getEmail()];
        $this->database->executeQuery($query, $parameters);
    }
}

?>