<?php

class Usuario
{
    private
        $idUsuario,
        $user,
        $password,
        $dtCreateUser;

    private function getIdUsario()
    {
        return $this->idUsuario;
    }

    public function setIdUsario($id)
    {
        $this->idUsuario = $id;
    }

    private function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    private function getPassword()
    {
        return $this->password;
    }
    public function __construct($user ="", $password="")
    {
        $calendar = new DateTime();
        $this->setUser($user);
        $this->setPassword($password);
        $this->setDtCreateUser($calendar->format("d/m/Y"));
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    private function getDtCreateUser()
    {
        return $this->dtCreateUser;
    }

    private function setDtCreateUser($value)
    {
        $this->dtCreateUser = $value;
    }
    public function setData($data){
        $calendar = new DateTime();
        
        $this->setIdUsario($data["idUsuario"]);
        $this->setUser($data["user"]);
        $this->setPassword($data["password"]);
        $this->setDtCreateUser("dia" . $calendar->format("d/m/Y"));
    }


    
    public function loadUser($user, $password)
    {

        $selectList = new Sql();
        $result = $selectList->select("SELECT * FROM usuario WHERE user = :USER AND password = :PASSWORD",
         array
         (":USER" => $user,
          ":PASSWORD" => $password
         ));
        if (count($result)>0) {
            $this->setData($result[0]);
        }else{
            throw new Exception("lOGIN e/ou SENHA inválidos");
        }
    }

    public function loadList()
    {
        $sql = new Sql();

        return json_encode($usuarios = $sql->select("SELECT * FROM usuario order by idUsuario;"));
    }

    public static function search($nomeDeUsuario){
        $sql = new Sql();

        return $sql->select("SELECT * FROM usuario WHERE user  LIKE :search ORDER BY idUsuario", array(
            ':search' => "%".$nomeDeUsuario."%"));
    }


    public function __toString()
    {
        return json_encode(
            array(
                $this->getIdUsario(),
                $this->getUser(),
                $this->getPassword(),
                $this->getDtCreateUser()
            )
        );
    }


    public function insert(){
        $newInsert = new Sql();
        $result =$newInsert->select("CALL sp_usuario_insert(:LOGIN, :SENHA, :DATA)",array(
            ':LOGIN'=>$this->getUser(),
            ':SENHA'=>$this->getPassword(),
            ':DATA' => $this->getDtCreateUser()
        ));

        if (count($result)>0) {
            $this->setData($result[0]);
        }
    }

    public function update($login, $pasword, $id){

        $this->setUser($login);
        $this->setPassword($pasword);
        $this->setIdUsario($id);
        $sql= new Sql();
        $calendar = new DateTime();
        $this->setDtCreateUser($calendar->format("d/m/Y"));

        $sql->select("UPDATE usuario set user = :LOGIN, password = :PASSWORD, dtcreateUser = :DATA WHERE idUsuario = :ID", 
        array
        (
            ':LOGIN'=>$this->getUser(),
            ':PASSWORD'=>$this->getPassword(),
            ':DATA'=>$this->getDtCreateUser(), 
            ':ID' => $this->getIdUsario()
        ));


    }

    public function delete($idUsuario){
        $this->setIdUsario($idUsuario);
        $sql = new Sql();
        $sql->select("DELETE FROM usuario WHERE idUsuario = :ID", array(
            ':ID' =>$this->getIdUsario()
        ));

    }
}
