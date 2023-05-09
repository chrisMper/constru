<?php 
    class message
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
//getuser
        public function getusers()
        {
            $this->db->query('SELECT * FROM users');
            $results = $this->db->resultSet();
            return $results;
        }

        public function getchats(){
            $this->db->query('SELECT * FROM messages');
            $results = $this->db->resultSet();
            return $results;
        }
//getuser2
    }