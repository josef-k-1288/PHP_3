<?php 

    class QueryBuilder {

        private $db;


        public function __construct($db)
        {
            $this->db = $db;
        }


        public function selectAll($table,$class)
        {
            $sql = "SELECT * FROM $table";
            $query = $this->db->prepare($sql);
            $query->execute();
            $todos = $query->fetchAll(PDO::FETCH_CLASS,$class);


            return $todos;
        }
    }

?>