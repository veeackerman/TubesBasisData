<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the daftar database
        public function insertdaftar($namadepan, $namabelakang, $email, $nomorhp, $password){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO users (namadepan, namabelakang, email, nomorhp, password) VALUES (:namadepan,:namabelakang,:email,:nomorhp,md5(:password))";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':namadepan',$namadepan);
                $stmt->bindparam(':namabelakang',$namabelakang);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':nomorhp',$nomorhp);
                $stmt->bindparam(':password',$password);
                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function insertreservasi($namapemesan, $tanggalreservasi	, $dari, $sampai, $idmeja, $pesantambahan){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO reservasi (namapemesan, tanggalreservasi, dari, sampai, idmeja, pesantambahan) VALUES (:namapemesan, :tanggalreservasi, :dari, :sampai, :idmeja, :pesantambahan)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':namapemesan',$namapemesan);
                $stmt->bindparam(':tanggalreservasi',$tanggalreservasi);
                $stmt->bindparam(':dari',$dari);
                $stmt->bindparam(':sampai',$sampai);
                $stmt->bindparam(':idmeja',$idmeja);
                $stmt->bindparam(':pesantambahan',$pesantambahan);
                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getMakanan(){
            try{
                $sql = "SELECT * FROM `makanan`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }

        public function getBook(){
            try{
                $sql = "SELECT * FROM `reservasi`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }

        public function getMinuman(){
            try{
                $sql = "SELECT * FROM `minuman`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }

        public function getDessert(){
            try{
                $sql = "SELECT * FROM `dessert`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }
        
        public function editAttendee($id,$namadepan, $namabelakang, $dob, $email,$contact,$specialty){
           try{ 
                $sql = "UPDATE `attendee` SET `firstname`=:namadepan,`lastname`=:namabelakang,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id ";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':namadepan',$namadepan);
                $stmt->bindparam(':namabelakang',$namabelakang);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }

        public function getAttendees(){
            try{
                $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getAttendeeDetails($id){
           try{
                $sql = "select * from attendee a inner join specialties s on a.specialty_id = s.specialty_id 
                where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteAttendee($id){
           try{
                $sql = "delete from attendee where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialties(){
            try{
                $sql = "SELECT * FROM `specialties`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getSpecialtyById($id){
            try{
                $sql = "SELECT * FROM `specialties` where specialty_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }


        

    }
?>