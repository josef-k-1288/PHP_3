<?php 

    class Post extends QueryBuilder {

        public $newPostStatus = NULL;

        public function createPost()
        {
            $title = $_POST['post_title'];
            $description = $_POST['post_description'];
            $createdAt = date('Y-m-d');
            $user_id = $_SESSION['loggedUser']->id;

            $sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([$title,$description,$user_id,$createdAt]);

            //die(var_dump($createdAt));

            if ($query) {
                $this->newPostStatus = true;
            } else {
                $this->newPostStatus = false;
            }
        }
    }

?>