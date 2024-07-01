<?php

namespace App\Actions;

use PDO;
use PDOException;

class ConnectDB
{
    public static function connect()
    {
        $host = env('MSQL_DB_HOST');
        $port = env('MSQL_DB_PORT');
        $dbname = env('MSQL_DB_DATABASE');
        $user = env('MSQL_DB_USERNAME');
        $password = env('MSQL_DB_PASSWORD');

        try {
            $pg_connect = "pgsql:host=$host;port=$port;dbname=$dbname";
            $pdo = new PDO($pg_connect, $user, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function run($query)
    {
        $pdo = self::connect();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    }
}
