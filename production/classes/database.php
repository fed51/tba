<?php
    class Database { 
        private $conn;
        private $result;        private $log = true;        
        function __construct() {           
            $this->conn = mysql_pconnect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS)
                or die("Connection failure to database");          
            if($this->conn != null) {                if($this->log) { Logger::Log("Connection Succeeded", -1, "DB"); }             
                mysql_select_db(DATABASE_DB, $this->conn) 
                    or die ("Database not found.");
            }
        }        // TODO: Finish.
        function select($cols, $from, $where = '' , $limit = -1, $returnType = 'array') {
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
            } else { return; }          			if(strlen($where) > 0) {            	$query .= ' WHERE ' . $where;            }                        if(is_int($limit) && $limit >= 0) {            	$query .= ' LIMIT ' . $limit;            }            
            if($this->conn != null) {            	Logger::Log("(DB) Query: " . $query);
                $this->result = mysql_query($query, $this->conn);
                Logger::Log("(DB) Num Rows: " . mysql_num_rows($this->result));
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