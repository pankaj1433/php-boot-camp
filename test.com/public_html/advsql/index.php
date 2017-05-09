<?php 
/**
* employee
*/
class employee
{
	
	public $db_name;
	public $db_user;
	public $db_pass;
	public $db_host;
	public $conn;

	function __construct()
	{
		$this->conn=false;
		$this->db_name='advance';
		$this->db_user='root';
		$this->db_pass='abcde';
		$this->db_host='localhost';
    	$this->connect();	
    }

	function __destruct() {
		$this->disconnect();
	}

	function __call($method, $args)
	{echo "$method function is not defined in this class <br>";}


	function disconnect(){
		if ($this->conn) {
			@pg_close($this->conn);
		}
	}
	
	function connect()
	{
		if(!$this->conn){
				try{
					$this->conn=new PDO("mysql:host={$this->db_host};dbname={$this->db_name}","$this->db_user","$this->db_pass");
			}
			catch(Exception $ex){
				die('Error :'.$ex->getMessage());
			}		
		}
	}
	function select_query($q){
		if($this->conn){
			 $result=$this->conn->query($q);
			 return $result;
		}
		else{
			echo "no connection";
			exit;
		}
	}

}
echo "<pre>";
$obj=new employee();



//Que 1.Fetch employee's Name, address, Phone, Dob, Department, salary whose salary is greater than average salary.
echo "<b>Fetch employee's Name, address, Phone, Dob, Department, salary whose salary is greater than average salary.<b><br>";
$salary_greater_than_avg=$obj->select_query("select e.name,e.address,e.phone,e.dob,d.name as department_name,s.salary from emp e,department d,salary s where e.dept_id=d.id and e.id=s.emp_id and s.salary>(select avg(salary) from salary)");

echo "<table border=1 cellspacing=2px  cellpadding=5px><thead><th>name</th><th>address</th><th>phone</th><th>dob</th><th>department name</th><th>salary</th></thead>";
while($row1=$salary_greater_than_avg->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr>";
	echo "<td>".$row1['name']."</td>";
	echo "<td>".$row1['address']."</td>";
	echo "<td>".$row1[phone]."</td>";
	echo "<td>".$row1[dob]."</td>";
	echo "<td>".$row1[department_name]."</td>";
	echo "<td>".$row1[salary]."</td>";
	echo "</tr>";
}
echo "</table>";





//Que 2.average paid salary salary for current month
$dt=date("Ym");

$paid_average_salary_currentMonth=$obj->select_query("SELECT avg(paid_salary) as average_salary FROM salary_paid WHERE DATE_FORMAT(salary_month,'%Y%m') = $dt");
$row2=$paid_average_salary_currentMonth->fetch(PDO::FETCH_ASSOC);
echo "<br>average paid salary salary for current month : ".$row2[average_salary];





//Que 3. Fetch the top 5 Employee's Name, Phone, Salary month, Paid salary for the current month
echo "<br><br>Fetch the top 5 Employee's Name, Phone, Salary month, Paid salary for the current month<br>";

$top_five_paid_currentMonth=$obj->select_query("SELECT e.name,e.phone,s.salary_month,s.paid_salary from emp e,salary_paid s  where e.id=s.emp_id and DATE_FORMAT(s.salary_month,'%Y%m') = $dt order by paid_salary desc limit 5");

echo "<table border=1 cellspacing=2px  cellpadding=5px><thead><th>name</th><th>phone</th><th>salary_month</th><th>salary_paid</th></thead>";
while($row3=$top_five_paid_currentMonth->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr>";
	echo "<td>".$row3[name]."</td>";
	echo "<td>".$row3[phone]."</td>";
	echo "<td>".$row3[salary_month]."</td>";
	echo "<td>".$row3[paid_salary]."</td>";
	echo "</tr>";
}
echo "</table>";




//Que4. Fetch the emplyee's name, phone, dob, department name, salary who join last month.
$dt1=date("md");

$birthday=$obj->select_query("SELECT * FROM emp WHERE DATE_FORMAT(dob,'%c%d') = $dt1");

echo "<br><br>Create a Program in PHP that will fetch and show employee details whose DOB is today<br>";

echo "<table border=1 cellspacing=2px  cellpadding=5px><thead><th>name</th><th>Date Of Birth</th></thead>";
while($row3=$birthday->fetch(PDO::FETCH_ASSOC))
{	
	echo "<tr>";
	echo "<td>".$row3[Name]."</td>";
	echo "<td>".$row3[dob]."</td>";
	echo "</tr>";
}
echo "</table>";
echo "</pre>";




//Que5. Fetch the emplyee's name, phone, dob, department name, salary who join last month.
echo "<br><br>Fetch the emplyee's name, phone, dob, department name, salary who join last month.<br>";
$dt=(date("Ym")-1);

$joined_last_month=$obj->select_query("SELECT e.name,e.phone, 	e.created_time ,e.dob,d.name as department_name,s.salary FROM emp e,department d,salary s WHERE e.dept_id=d.id and s.emp_id=e.id and DATE_FORMAT(e.created_time,'%Y%m') = $dt");

echo "<table border=1 cellspacing=2px  cellpadding=5px><thead><th>name</th><th>phone</th><th>date of birth</th><th>joining_date</th><th>department_name</th><th>salary</th></thead>";
while($row4=$joined_last_month->fetch(PDO::FETCH_ASSOC))
{	
	echo "<tr>";
	echo "<td>".$row4[name]."</td>";
	echo "<td>".$row4[phone]."</td>";
	echo "<td>".$row4[dob]."</td>";
	echo "<td>".$row4[created_time]."</td>";
	echo "<td>".$row4[department_name]."</td>";
	echo "<td>".$row4[salary]."</td>";
	echo "</tr>";
}
echo "</table>";

echo "<br><br><b> What is composite key?</b><br>";

?>