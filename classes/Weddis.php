
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

    public function getCatId($name){
        try{
            $stmt = $this->conn->prepare("
            SELECT category_id 
            FROM w_categories
            WHERE category_name = :category_name");
            $stmt->execute(array(':category_name' => $name));
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            $cat_id = $result[0]["category_id"];
            return $cat_id;
        } catch (Exception $e){
            echo 'Message: ' .$e->getMessage();
        }
    }
    

  public function getSuppliers(){
    $stmt = $this->conn->prepare("SELECT * FROM weddis.w_suppliers;");
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_OBJ);
    return $result;
  }
    
    
    public function getSupplier($supplier_id){
        $stmt = $this->conn->prepare("SELECT * FROM w_suppliers where supplier_id=:supplier_id");
        $stmt->execute(array(':supplier_id' => $supplier_id));
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result[0];
    }
    
    
//    present category suppliers random based on business logic 
    public function getRandCategorySuppliers($cat_id){
        $stmt = $this->conn->prepare("
        SELECT * FROM w_suppliers
        WHERE category_id = :cat_id
        ORDER BY RAND()
        LIMIT 8
        ");
        $stmt->execute(array(':cat_id' => $cat_id));
        $result = $stmt->fetchall(PDO::FETCH_OBJ);
        return $result;
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
