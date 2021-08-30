<?php 
    require_once("Model.php");
	class Product extends Model{
		var $table = 'product';

		function find($id){
        	// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM product_view WHERE productCode = '".$id."'";
		    // Thuc thi cau lenh truy van co so du lieu

		    return $data = $this->connection->query($query)->fetch_assoc();
		}
		
		function create($data){
			$f = "";
			$v = "";
			foreach ($data as $key => $value) {
				$f .= $key.",";
				$v .= "'".$value."',";
			}
	
			$f = trim($f,",");
			$v = trim($v,",");
			
			// Cau lenh truy van co so du lieu
			$query = "INSERT INTO ".$this->table."(".$f.") VALUES (".$v.");";
			//print($query); die;
			// Thuc thi cau lenh truy van co so du lieu
			return $this->connection->query($query);
		}
 
        function edit($data){
        	$v = "";
            foreach ($data as $key => $value) {
            	$v .= $key."='".$value."',";
            }
            $v = trim($v,",");
        	// Cau lenh truy van co so du lieu
        	$query = "UPDATE ".$this->table." SET ".$v." WHERE productCode ='".$data['productCode']."'";
			//print($query); die;
		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }

        function delete($id){
        	// Cau lenh truy van co so du lieu
    		$query = "DELETE FROM ".$this->table." WHERE productCode = '".$id."'";

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }
	}
 ?>