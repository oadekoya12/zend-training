<?php
/**
 * Database Functions (connection and query builders)
 */

/**
 * Connect to the database
 * @param $config
 * @return mysqli
 */
function getDbConnection($config)
{
    return mysqli_connect($config['dsn'], $config['username'], $config['password'], $config['database']);
}

/**
 * @param array $values
 * @return null|string
 */
function getWhere(array $values)
{
    $where = null;
    // If only one element, return a single where
    if (count($values) === 1) {
        $key = key($values);
        $value = current($values);
        if($value) return $where . " WHERE $key = '$value'";
        return $where;
    }

    // If multiples
    for ($i = 1; $i <= count($values); $i++) {
        $key = key($values);
        $value = current($values);
        if ($i === 1 && $value) {
            $where .= " WHERE $key = '$value'";
            next($values);
            continue;
        }
        if($value) $where .= " AND $key = '$value'";
        next($values);
    }
    return $where;
}

/**
 * @param $conn
 * @param $table
 * @return array
 */
function getColumns($conn, $table){
    $columnQuery = "select Column_name from Information_schema.columns where Table_name like '$table'";

    $result = mysqli_query($conn, $columnQuery);
    $results = $result->fetch_all(MYSQLI_NUM);
    $columns = [];
    foreach($results as $value){
        $columns[] = current($value);
    }
    return $columns;
}