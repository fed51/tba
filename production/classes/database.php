<?php
    class Database { 
        private $conn;
        private $result;       
        function __construct() {           
            $this->conn = mysql_pconnect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS)
                or die("Connection failure to database");          
            if($this->conn != null) {
                echo "Connection succeeded.\n";             
                mysql_select_db(DATABASE_DB, $this->conn) 
                    or die ("Database not found.");
            }
        }       
        function select($cols, $from, $where = '' , $limit = '', $returnType = 'array') {
            $query = 'SELECT ';          
            if(is_array($cols)) {
                
                if(count($cols) > 0) {
                    $count = count($cols);
                    for($i = 0; $i < $count; $i++) {
                        $query .= $cols[$i];
                        if($i != $count - 1) {
                            $query .= ', ';
                        }   
                    }
                }               
            } else if(is_string($cols)) {
                $columns = explode(',', $cols);
                $count = count($columns);
                for($i = 0; $i < $count; $i++) {
                    $query .= trim($columns[$i]);
                    if($i != $count - 1) {
                        $query .= ', ';
                    }   
                }
            }           
            $query .= ' FROM ';
            if(strlen($from) > 0) {
                $query  .= $from;
            }          
            if($this->conn != null) {
                $this->result = mysql_db_query(DATABASE_DB, $query, $this->conn);
                echo "Num Rows: " . mysql_num_rows($this->result);
            }           
			if($returnType == 'array') {
                $this->makeAssoc();
            }            
            return $this->result;
        }
        
        private function makeAssoc() {
            $result = array();            
            while ($row = mysql_fetch_assoc($this->result)) {
                $result[] = $row;
            }           
            $this->result = $result;            
            print_r($this->result);
        }
        
        function tables() {
            
            $tables = array();
            
            if($this->conn != null) {              
                $tableList = mysql_list_tables(DATABASE_DB); 
                $count = mysql_num_rows($tableList);
                for($i = 0; $i < $count; $i++) {
                    $tables[] = mysql_tablename($tableList, $i);
                }
            }            
            return $tables;            
        }        
        function listTables() {
            echo "Tables available: \n";
            print_r($this->tables()); 
        }      
        function __destruct() {
            if($this->conn != null) {
                mysql_close($this->conn);
            }
        }      
    }