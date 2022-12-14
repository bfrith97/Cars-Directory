<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($brand, $model, $year, $type, $id, $parameters = [])
    {
        $sql = "UPDATE {$brand} SET model = '{$model}', year = {$year}, type = '{$type}' WHERE id = {$id}";
        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id, $parameters = [])
    {
        $sql = sprintf(
            'delete from %s where id=',
            $table,
        ) . $id;
        // var_dump($sql);

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteAll($table, $parameters = [])
    {
        $sql = sprintf(
            'delete from %s',
            $table
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
