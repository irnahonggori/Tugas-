<?php
EmployeeTest:

$emp1=new Employee("john","doe",20);
$emp2=new Employee("kate","kron",40);
echo "Employee salaries before rise\n";
echo "Employee 1: \n". (12 * $emp1->getSalary());
echo "\nEmployee 2: \n". (12 * $emp2->getSalary()."\n");
echo "Employee salaries after rise\n";
$emp1->setSalary(24);
$emp2->setSalary(48);
echo "Employee 1: \n". (12 * $emp1->getSalary());
echo "\nEmployee 2: \n". (12 * $emp2->getSalary());

Employee class:

class Employee{
var $firstName;
var $lastName;
var $salary;
  
public function __construct($firstName,$lastName,$salary){
$this->firstName=$firstName;
$this->lastName=$lastName;
$this->salary=$salary;
}
public function getFirstName(){
return $this->firstName;
}
public function setFirstName($firstName){
$this->firstName=$firstName;
}
public function getlastName(){
return $this->lastName;
}
public function setlastName($lastName){
$this->lastName=$lastName;
}
public function getSalary(){
return $this->salary;
}
public function setSalary($salary){
if($salary>0){
$this->salary=$salary;
}
else{
$this->salary=0;
}
}
  
}
?>

