<?php



namespace Phppot;

use mysqli;

/**
 * Generic datasource class for handling DB operations.
 * Uses MySqli and PreparedStatements.
 *
 * @version 2.6 - recordCount function added
 */
class database
{
    var $con;
    var $server = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'webapp';

    function __construct()
    {
        $this->con = new mysqli($this->server, $this->user, $this->pass, $this->db);

        if ($this->con->connect_error) {
            echo "Database Connection Failed";
            exit;
        } else {
            // echo "Database Connection Done";
        }
    }

    function select($query)
    {
        $resource =  $this->con->query($query) or $this->error($this->con->errno, $this->con->error, $query);
        return $resource;
    }

    function insert($table, $field, $values)
    {
        $query = "insert into " . $table . "(" . $field . ") values(" . $values . ")";
        $this->con->query($query) or $this->error($this->con->errno, $this->con->error, $query);
    }

    function update($table, $set, $where)
    {
        $query = "update " . $table . " set " . $set . " where " . $where;
        $this->con->query($query) or $this->error($this->con->errno, $this->con->error, $query);
    }

    function error($errno, $error, $query)
    {
        echo "<div style='background-color:#faa'>";
        echo "<h4 style='background-color:#f00'>" . $errno . "-" . $error . "</h4>";
        echo $query;
        echo "</div>";
        exit;
    }

    function fetch($resource)
    {
        return $resource->fetch_assoc();
    }

    function num_rows($resource)
    {
        return $resource->num_rows;
    }

    function delete($query)
    {
        $this->con->query($query) or $this->error($this->con->errno, $this->con->error, $query);
    }
}

// $c = new database();
