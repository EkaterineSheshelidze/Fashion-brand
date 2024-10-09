<?php

use config\Model;

class Shop extends Model{
    public function insertShop($data){
        $title = $data["title"];
        $price = $data["price"];
        $sourceName = "";
        if (isset($_FILES) && !empty($_FILES)) {

            $tmp_name = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name']; 
            $extension = pathinfo($name)['extension'];
            $filename = pathinfo($name)['filename'];
           
            $sourceName = $filename . '-' . time() . '.' . $extension;

            $destination = ROOT_URL . '/assets/images/shop/'. $sourceName; 

            move_uploaded_file($tmp_name, $destination); 

        }


        $query = "INSERT INTO shop
                        SET title = '".$title."' , price = '".$price."', image = '".$sourceName."'";
        $this->run($query);
    }
    /////
    public function updateShop($data){
        $title = $data['title'];
        $price = $data['price'];
        $id = $data["id"];
        $sourceName = $data["image"]; ///doesnt work
        
        if (isset($_FILES) && !empty($_FILES)) {

            $tmp_name = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name']; 
            $extension = pathinfo($name)['extension'];
            $filename = pathinfo($name)['filename'];
           
            $sourceName = $filename . '-' . time() . '.' . $extension;

            $destination = ROOT_URL . '/assets/images/shop/'. $sourceName; 

            move_uploaded_file($tmp_name, $destination); 

        }
        

        $query = "UPDATE shop
        SET title = '".$title."' , price = '".$price."', image = '".$sourceName."' WHERE id =".$id;

        $this->run($query);
    }
} 