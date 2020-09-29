<?php

class users_model extends Connect
{
    private $db;
    private $users;

    public function __construct()
    {
        $this->db = Connect::connection();
    }

    public function get_users()
    {
        $sql= 'SELECT * FROM users';
        $fila=$this->db->query($sql);
            $this->users=$fila;
            return  $this->users;
    }
    function create($data){
        
        $sql="INSERT INTO users (name,email,phone) VALUES (?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bind_param('ssi', $data['name'], $data['email'], $data['phone']);
        $query->execute();
 
    }
    function get_id($id){
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }
    function update($data,$date){
        
        $sql = "UPDATE users  set  name=?, email =?, phone=? WHERE id = ? ";
        $q = $this->db->prepare($sql);
        $q->bind_param('ssii', $data['name'], $data['email'], $data['phone'],$data['id']);
        $q->execute();

    }
    function delete($date){
        $sql="DELETE FROM users where id={$date}";
        $result = $this->db->query($sql);
    }

    
}

?>