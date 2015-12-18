<?php
require('db_connect.php');

class Model {
    protected static $dbc;
    protected static $table;
    public $attributes = array();
    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }
    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database
            self::$dbc = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME, DB_USER, DB_PASS);
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo self::$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS). PHP_EOL;
        }
    }
    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
         if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }
    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
         $this->attributes[$name] = $value;
    }
    /*
     * Persist the object to the database
     */
    public function save()
    {
        self::dbConnect();
        if(!empty($this->attributes))
        {
            if(isset($this->attributes['id'])){
                $this->update($this->attributes['id']);
            }else{
                $this->insert();
            }
        }
    }
    protected function update($id)
    {
        foreach ($this->attributes as $key => $value) {
          
            $update = "UPDATE " . static::$table . " SET " . $key.  " = :value WHERE id =" . $this->attributes['id'];  
            $stmt= self::$dbc->prepare($update); 
            $stmt->bindValue(':value', $value, PDO::PARAM_STR);     
            $stmt->execute();
        }
    }
    protected function insert()
    {
        $insert = "INSERT INTO ". static::$table . " (email, name, phone, address, city, state, zip) VALUES (:email, :name, :phone, :address, :city, :state, :zip)";
        $stmt= self::$dbc->prepare($insert);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':phone', $this->attributes['phone'], PDO::PARAM_STR);
        $stmt->bindValue(':address', $this->attributes['address'], PDO::PARAM_STR);
        $stmt->bindValue(':city', $this->attributes['city'], PDO::PARAM_STR);
        $stmt->bindValue(':state', $this->attributes['state'], PDO::PARAM_STR);
        $stmt->bindValue(':zip', $this->attributes['zip'], PDO::PARAM_STR);
        $stmt->execute();

    }
    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();
        // @TODO: Create select statement using prepared statements
        $query = "SELECT * FROM ". static::$table . " WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();
        // @TODO: Learning from the previous method, return all the matching records
        $query = "SELECT * FROM ". static::$table;
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
?>
















