<?php
require_once("db.php");

class myClass{
    private $id;
    private $noms;
    private $adresse;
    protected $connection;
    public function __construct($id=0,$noms="",$adresse=""){
        $this->id=$id;
        $this->noms=$noms;
        $this->adresse=$adresse;
        $this->connection=new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

}
public function setId($id){
    $this->id=$id;
}
public function getId(){
 return $this->id=$id;
}
public function setNoms($noms){
    $this->noms=$noms;
}
public function getNoms(){
 return $this->noms=$noms;
}
public function setAdresse($adresse){
    $this->adresse=$adresse;
}
public function getAdresse(){
 return $this->adresse=$adresse;
}
public function insertData(){
    try {
        $stmt=$this->connection->prepare("INSERT INTO `tbl_data`(`noms`, `adresse`) VALUES (?,?)");
        $stmt->execute([$this->noms,$this->adresse]);
        echo "<script>alert('Données enregistrées avec succès!');document.location='index.php'</script>";
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
public function selectData(){
    try {
        $stmt=$this->connection->prepare("SELECT * FROM `tbl_data`");
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
public function selectOne(){
    try {
        $stmt=$this->connection->prepare("SELECT * FROM `tbl_data` WHERE id=?");
        $stmt->execute([$this->id]);
        return $stmt->fetchAll();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
public function updateData(){
    try {
        $stmt=$this->connection->prepare("UPDATE `tbl_data` SET `noms`=?,`adresse`=? WHERE `id`=?");
        $stmt->execute([$this->noms,$this->adresse,$this->id]);
        echo "<script>alert('Données modifiées avec succès!');document.location='index.php'</script>";
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
public function deleteData(){
    try {
        $stmt=$this->connection->prepare("DELETE FROM `tbl_data` WHERE id=?");
        $stmt->execute([$this->id]);
        return $stmt->fetchAll();
        echo "<script>alert('Données supprimées avec succès!');document.location='index.php'</script>";
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
}
?>