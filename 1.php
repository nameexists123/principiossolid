<?php
class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
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

class Database
{
    public function executeQuery($query, $parameters)
    {
        // Ejecuta la consulta en la base de datos
    }
}
?>
