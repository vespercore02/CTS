<?php 

class Contact extends Db
{

    public function pplInsert($post)
    {

        $post['symptoms'] = $this->pplSymptoms($_POST['symptoms']);

        $sql = "INSERT INTO people_info (fname, mname, lname, city, barangay, con_num, symptoms, travel, dpa, date_register) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$post['fname'], $post['mname'], $post['lname'], $post['city'], $post['barangay'], $post['con_num'], $post['symptoms'], $post['travel'], $post['dpa'], date("Y-m-d h:s:i")]);

        return $result;
    }

    public function pplShow()
    {
        $sql = "SELECT * FROM people_info";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
        
    }

    public function pplSymptoms($post)
    {
        if (is_array($post)) {
            # code...
            
            $new_post=implode(",",$post);

            echo $new_post;

            return $new_post;
        }

        return $post;

    }

}


?>