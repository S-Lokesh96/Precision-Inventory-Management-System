<?php
class Model_auth extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load necessary libraries or models here
    }

    public function register($data) {
        // Assuming you have a 'users' table in your database
        // Insert the user data into the 'users' table
        return $this->db->insert('users', $data);
    }

    // Other methods of your Model_auth class...
}
