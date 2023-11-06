<?php 
    class Product_AuthorModel extends DB{
        public function insert($product_id,$cat_id){
            $query = "INSERT INTO product_author VALUES(null,'$product_id','$cat_id')";
            $result = false;
            if($this->con->query($query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function delete($product_id){
            $query = "DELETE FROM product_author WHERE product_id = '$product_id'";
            $resutl = false;
            if($this->con->query($query)){
                $result = true;
            }
            return json_encode($resutl);
        }

    }
?>