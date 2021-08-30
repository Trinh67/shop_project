 <?php 
	class Model{

		function All(){
		    $data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/'.$this->table.'/');
			$data = json_decode($response, true);
			
		    return $data;
		}
        
        function find($id){
        	// Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table." WHERE id=".$id;

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
        	$query = "UPDATE ".$this->table." SET ".$v." WHERE id =".$data['id'];

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }

        function delete($id){
        	// Cau lenh truy van co so du lieu
    		$query = "DELETE FROM ".$this->table." WHERE id = ".$id;

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
		}
		
		function Count(){
			$data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$data[1] = file_get_contents('https://trinh67uet.et.r.appspot.com/customer/count');
			$data[2] = file_get_contents('https://trinh67uet.et.r.appspot.com/productLine/count');
			$data[3] = file_get_contents('https://trinh67uet.et.r.appspot.com/order/count');
			$data[4] = file_get_contents('https://trinh67uet.et.r.appspot.com/product/count');
			
		    return $data;
		}
	}
 ?>