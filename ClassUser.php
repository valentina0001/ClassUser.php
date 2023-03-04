<!DOCTYPE html>
		<html>
	<head>
<meta charset="UTF-8">
<title>Assignment1</title>
<h2>Assignment</h2>
<h3>Class User</h3>
	</head>
<body>

<?php
class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $age;
    public function __construct($id, $first_name, $last_name, $age)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    public function getFullName()
    {
        return "$this->first_name
		$this->last_name";
    }
    public function isAdult()
    {
        return $this->age >= 18;
    }
}
    $person_1 = new User(1, 'Laza', 'Lazić', 90);
    $person_2 = new User(2, 'Marta', 'Martić', 10);

    echo '<p> <b> First and last name:</b> '.$person_1->getFullName();
    echo ' <b>- is adult person: </b> '.($person_1->isAdult() ? 'True!!' : 'False!!').'</p>';

    echo '<p> <b> First and last name: </b> '.$person_2->getFullName();
    echo ' <b>- is adult person: </b>  '.($person_2->isAdult() ? 'True!!' : 'False!!');
?> 
	</body>
			</html> 