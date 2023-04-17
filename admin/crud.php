<?php
class Artikel
{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "dps";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($banner, $thumbnail, $judul, $tanggal, $konten, $keyword, $description)
    {
        $data = $this->db->prepare('INSERT INTO artikel (bigPicture, smallPicture, title, date, content, keyword, description) VALUES (?, ?, ?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $banner);
        $data->bindParam(2, $thumbnail);
        $data->bindParam(3, $judul);
        $data->bindParam(4, $tanggal);
        $data->bindParam(5, $konten);
        $data->bindParam(6, $keyword);
        $data->bindParam(7, $description);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM artikel");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM artikel where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$posisi, $responsibilities, $requirements, $catatan){
        $query = $this->db->prepare('UPDATE karir set name=?,responsibilities=?,requirements=?,notes=? where id=?');
        
        $query->bindParam(1, $posisi);
        $query->bindParam(2, $responsibilities);
        $query->bindParam(3, $requirements);
        $query->bindParam(4, $catatan);
        $query->bindParam(5, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM artikel where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function getMinID(){
        $query = $this->db->prepare("SELECT id as ID FROM artikel HAVING MIN(id)");

        $query->execute();
        return $query->rowCount();
    }
}

class Proyek{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($gambar, $judul, $deskripsi)
    {
        $data = $this->db->prepare('INSERT INTO proyek (gambar, judul, deskripsi) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $gambar);
        $data->bindParam(2, $judul);
        $data->bindParam(3, $deskripsi);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM proyek");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM proyek where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$gambar, $judul, $deskripsi){
        $query = $this->db->prepare('UPDATE proyek set gambar=?,judul=?,deskripsi=? where id=?');
        
        $query->bindParam(1, $gambar);
        $query->bindParam(2, $judul);
        $query->bindParam(3, $deskripsi);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM proyek where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}

?>