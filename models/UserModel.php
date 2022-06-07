<?php
class UserModel implements Serializable{
    private int $id;
    private string $name;
    private string $lasName;
    private string $age;
    private string $address;
    private string $phone;
    private string $email;
    private string $identificationCard;

    public function __construct(int $id=0 ,string $name="", string $lasname="", string $age="", 
      string $address="", string $phone="",string $email="" ,string $identificationCard=""){

      $this->id = $id;
      $this->name = $name;
      $this->lasName = $lasname;
      $this->age = $age;
      $this->address = $address;
      $this->phone = $phone;
      $this->email = $email;
      $this->identificationCard = $identificationCard;
    }

    public function setId(int $id){
      $this->id = $id;
    }

    public function setName(string $name){
      $this->name = $name;
    }

    public function setLastName(string $lastName){
      $this->lasName = $lastName;
    }

    public function setAge(string $age){
      $this->age = $age;
    }

    public function setAddress(string $address){
      $this->address = $address;
    }

    public function setPhone(string $phone){
      $this->phone = $phone;
    }
    
    public function setEmail(string $email){
      $this->email = $email;
    }

    public function setIdentCard(string $indentificationCard){
      $this->identificationCard = $indentificationCard;
    }
    
    public function getName():string{
      return $this->name;
    }

    public function getLastName():string{
      return $this->lasName;
    }

    public function getAge():string{
      return $this->age;
    }

    public function getAddress():string{
      return $this->address;
    }
    public function getPhone():string{
      return $this->phone;
    }

    public function getEmail():string{
      return $this->email;
    }

    public function getIdentCard():string{
      return $this->identificationCard;
    }
    public function getId():int{
      return $this->id;
    }
    
    public function serialize(): array {
      return [
        "id" =>$this->id,
        "name" => $this->name,
        "lastname" => $this->lasName,
        "age" => $this->age,
        "address" => $this->address,
        "phone" => $this->phone,
        "email" => $this->email,
        "idetification" => $this->identificationCard,
      ];
    }
    
    public function unserialize(string $data): void{
      $this->id = $data["id"];
      $this->name = $data["name"];
      $this->lasName = $data["lastname"];
      $this->age = $data["age"];
      $this->address = $data["address"];
      $this->phone = $data["phone"];
      $this->email = $data["email"];
      $this->identificationCard = $data["idetification"];
    }
  }
?>
