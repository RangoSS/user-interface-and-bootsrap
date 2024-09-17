<?php
include "config.php";

class Api extends Config
{

    public  function __construct() {}

    // Example function to fetch user data
    function getUsers()
    {
        $users = [
            ["id" => 1, "name" => "John Doe", "email" => "john@example.com", "image" => "mango.jpg"],
            ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com", "image" => "mango.jpg"],
            ["id" => 3, "name" => "Mike Johnson", "email" => "mike@example.com", "image" => "mango.jpg"]
        ];
        return $users;
    }
    public function galleryArchitect()
    {
        $sql = " SELECT * FROM `images` WHERE portfolio= 'architecture'"; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }

    public function procurement()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'procurement'"; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }

    public function galleryProram_management()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'program_management' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function galleryAudit()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'audit' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function galleryAsset()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'asset' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function galleryProject_management()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'project_management' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function galleryProertyDevelopment()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'property_development' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }

    public function properyDevelop()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'property_development' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function projectFinance()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'project_finance' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }

    public function quantitySurvey()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'quantity_survey' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function project_disput()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'project_dispute' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function indexHome()
    {
        $sql = "SELECT * FROM `images` WHERE portfolio= 'baner' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function indexHomeArchitect()
    {
        $sql = "SELECT * FROM `images` WHERE img_src= 'http://localhost/archiark-main/backend/upload/architect3.jpg' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
    public function indexHomeQuantityS()
    {
        $sql = "SELECT * FROM `images` WHERE img_src= 'http://localhost/archiark-main/backend/upload/quantitySurvey4.jpg' "; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }
}

//start get method
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    $api = new Api(); //initiate class

    if ($action == 'getImages') {
        $response = $api->procurement();
    } elseif ($action == 'architectFront') { //front end request

        $response = $api->galleryArchitect();
    } elseif ($action == 'p_management') {
        $response = $api->galleryProram_management();
    } elseif ($action == 'p_audit') {
        $response = $api->galleryAudit();
    } elseif ($action == 'p_asset') {
        $response = $api->galleryAsset();
    } elseif ($action == 'project_m') {
        $response = $api->galleryProject_management();
    } elseif ($action == 'propery_dev') {

        $response = $api->properyDevelop();
    } elseif ($action == 'project_finance') {
        $response = $api->projectFinance();
    } elseif ($action == 'quantity_survey') {
        $response = $api->quantitySurvey();
    } elseif ($action == 'p_dispute') {
        $response = $api->project_disput();
    } elseif ($action == 'homePage') {
        $response = $api->indexHome();
    } elseif ($action == 'homePageArch') {
        $response = $api->indexHomeArchitect();
    } elseif ($action == 'homeQuantity') {
        $response = $api->indexHomeQuantityS();
    } else {
        $response = ["error" => "Invalid action"];
    }

    // Output the response as JSON
    echo json_encode($response);
} else {
    echo json_encode(["error" => "No action specified"]);
}
/*
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    $api = new Api(); //initiate class

    if ($action == 'getUsers') {
        $response = $api->getUsers();
    } elseif ($action == 'galleryArchitect') {
        $response = $api->galleryArchitect();
    } else {
        $response = ["error" => "Invalid action"];
    }

    // Output the response as JSON
    echo json_encode($response);
} else {
    echo json_encode(["error" => "No action specified"]);
}
*/