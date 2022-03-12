<?php
class CreateDb{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //constracter
    public function __construct(
        $dbname="Elib",
        $tablename="Products",
        $servername="localhost",
        $username="root",
        $password=""
    )
    {
        //initilize variables
       $this->dbname = $dbname;
       $this->tablename = $tablename;
       $this->servername = $servername;
       $this->username = $username;
       $this->password = $password;

       //connection
       $this->con = mysqli_connect($servername,$username,$password);

       //check connection
       if(!$this->con){
           die('Connection Failed:'.mysqli_connect_error());
       }

       //query
       $sql = "create database if not exists $dbname";

       //execute  query
       if(mysqli_query($this->con,$sql)){
           $this->con =  mysqli_connect($servername,$username,$password,$dbname);

           //create table
           $sql = "create table if not exists $tablename
           (id int(11) not null auto_increment primary key,
           product_name varchar(25) not null,
           product_price float,
           product_image varchar(255));";

           if(!mysqli_query($this->con,$sql)){
               echo "Error creating table:".mysqli_error($this->con);

           }
           else{
               return false;
           }
       }
    }
    //get product(book)
    public function getBookData(){
        $sql = "select * from $this->tablename";
        $result = mysqli_query($this->con,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}
?>