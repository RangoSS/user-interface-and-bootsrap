<?php


class Config
{
    private $db_host = 'localhost'; // Define your DB host
    private $db_name = 'risonic'; // Define your DB name
    private $username = 'root';     // Define your DB username
    private $db_password = '';      // Define your DB password




    // Method to establish database connection
    public function getConnection()
    {
        $conn = mysqli_connect($this->db_host, $this->username, $this->db_password, $this->db_name);
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }
        return $conn;
    }

    // Method to execute a query
    public function queryConn($query)
    {
        $conn = $this->getConnection(); // Get the connection
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        return $result;
    }
}

// Create a new instance of the API class
//$api = new API();
//$in = $api->insert();
//$data = $api->fetch_all();
//echo json_encode($data);
//$data = $api->insert();
// Uncomment the following line to perform an insert operation
// echo $api->insert();
