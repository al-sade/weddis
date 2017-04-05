
<?php
require_once(__DIR__.'/Database.php');
require_once(__DIR__.'/../config.php');

class WEDDIS
{
  protected $conn;
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
  }
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

  public function getSuppliers(){
    $stmt = $this->conn->prepare("SELECT * FROM weddis.w_suppliers;");
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_OBJ);
    return $result;
  }
    
    public function getCatId($name){
        $stmt = $this->conn->prepare("select category_id where name = :name");
    }
    
    public function getSupplier($supplier_id){
        $stmt = $this->conn->prepare("SELECT * FROM weddis.w_suppliers where supplier_id=:supplier_id");
        $stmt->execute(array(':supplier_id' => $supplier_id));
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result[0];
    }
    
    //improve to query oall idsnce for  - get_wishlist.php
    public function getSupplierImage($id){
        $stmt = $this->conn->prepare("SELECT profile_pic FROM weddis.w_suppliers where supplier_id=:supplier_id");
        $stmt->execute(array(':supplier_id' => $id));
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        if(isset($result[0]['profile_pic'])){
        return $result[0]['profile_pic'];
        } else{
            return 0;
        }
    }
    
    public function submitEvent($name, $phone, $email, $date, $message, $suppliers){
        $status = 0;
        try
		{
        $stmt = $this->conn->prepare("INSERT INTO w_events (
            `event_id` ,
            `event_date` ,
            `contact_name` ,
            `contact_phone` ,
            `contact_mail` ,
            `message`,
            `suppliers`,
            `status`
            )
            VALUES (NULL ,  :event_date, :contact_name, :contact_phone, :contact_mail, :message , :suppliers, :status);");
        
            $stmt->bindparam(":event_date", $date);
			$stmt->bindparam(":contact_name", $name);
			$stmt->bindparam(":contact_phone", $phone);
			$stmt->bindparam(":contact_mail", $email);
			$stmt->bindparam(":message", $message);
			$stmt->bindparam(":suppliers", $suppliers);
			$stmt->bindparam(":status", $status);
			$stmt->execute();
			return $stmt;
        }
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
        
    }
    
    public function getSupplierAlbums($supplier_id){
            $stmt = $this->conn->prepare("SELECT * FROM w_albums WHERE supplier_id = :supplier_id;");
            $stmt->execute(array(':supplier_id' => $supplier_id));
            $result = $stmt->fetchall(PDO::FETCH_OBJ);
            return $result;
    }
    
    public function getTestimonials($supplier_id){
            $stmt = $this->conn->prepare("SELECT * FROM w_testimonials WHERE supplier_id = :supplier_id;");
            $stmt->execute(array(':supplier_id' => $supplier_id));
            $result = $stmt->fetchall(PDO::FETCH_OBJ);
            return $result;
    }
}
