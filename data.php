<?php
    class database {
        // khai báo thuộc tính
        private $conn = null;
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $data = 'database1';
        private $result = '';
        
        // xây dựng phương thức
        private function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->data) or die ('connection fail');
            $this->conn->query('SET NAMES UTF8');
        }
        // phương thức select dữ liệu
        public function select($sql){
            $this->connect();
            $this->result = $this->conn->query($sql);
        }
        // Duyệt dữ liệu
        public function fetch(){
            if ($this->result->num_rows > 0) {
               $rows = $this->result->fetch_assoc();
            }else {
                $rows = null;
            }
            return $rows;
        }
        
        // insert,update,delete dữ liệu
        public function command($sql) {
            $this->connect();
            $this->conn->query($sql);
            $this->conn->close();
        }
        //phương thức bảo mật
        public function checknull($a){
            if(!empty($a)){
                return true;
            }else {
                return false;
            }
        }
        //phương thức bảo mật
        public function checknumber($a){
            if(is_numeric($a)){
                return true;
            }else {
                return false;
            }
        }
    }   
?>
