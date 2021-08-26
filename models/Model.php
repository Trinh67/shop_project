 <?php 
	require_once('Connection.php');
	class Model{
		var $connection;
        var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All($line, $x, $y){
		    $data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum='.$x.'&pageSize='.$y.'&name=null&line='.$line.'&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}

		function Search($data, $x, $y){
		    // Cau lenh truy van co so du lieu
		    //$query = "SELECT p.*, s.sales_percent FROM products p LEFT JOIN sales s ON s.productCode = p.productCode  Where p.productName LIKE '%".$data."%' LIMIT ".$y.",".$x;
			$query = "SELECT * FROM findProduct_view Where productName LIKE '%".$data."%' LIMIT ".$y.",".$x;
		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}
		
		function Hot($x, $y){
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum=1&pageSize=8&name=null&line=0&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}
		
        function find($id){
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/'.$id);
			$data = json_decode($response, true);
		    return $data;
        }

		function getRelatedProducts($line){
			// Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum=1&pageSize=5&name=null&line='.$line.'&min=0&max=1000000000');
			$data = json_decode($response, true);
		    return $data;
		}
	}
 ?>