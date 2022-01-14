<?php

class Crud
{


    private function connect()
    {
        $config = require_once 'config.php';

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];

        $username = $config['username'];

        $password = $config['password'];

        return new PDO($dsn, $username, $password);
    }

    public function all()
    {
        $sth = $this->connect()->prepare('SELECT * from `blogs`');
        $sth->execute();

        return $sth->fetchAll();
    }

    public function update($id, $name, $desc)
    {
        $sth = $this->connect()->prepare('UPDATE `blogs` SET `name` = ?, `description`=? where `id`=?');
        $sth->execute([$name, $desc, $id]);
    }
    public function delete($id)
    {
        $sth = $this->connect()->prepare('DELETE FROM `blogs` WHERE `id` = ?');
        $sth->execute([$id]);
    }

    public function create($name, $desc)
    {
    $sth = $this->connect()->prepare("INSERT INTO `blogs` SET `name` = :name, `description` = :description");
    return $sth->execute([
        'name' => $name,
        'description' => $desc
    ]);
    }

}