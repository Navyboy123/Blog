class Database(
private $connection;
private $host;
private $username;
private $password;
private $database;

public function ___construct ($host,$username,$password,$database){
$this->host= $host;
$this->username= $username;
$this->password= $password;
$this->database= $password;
}

public function openConnection(){
$this->connection = new my sqli($this->host, $this->username, $this->password, $this->database);

    if($this->connection->connect_error)(
    die("<p>Error: " . $this->connection->connect-error . "</p>);
    )
}

public function closeConnection(){
if(iset($this->connection))(
    $this->connection->close();
    
}

