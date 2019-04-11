<?php 

include 'includes.php';
include 'student.php';

//inital students are put inside array students[].
$students = array();
$students[] = (new Student(1,'Igor','CSMB',6,7,6,6));
$students[] = (new Student(2,'Milan','CSM',6,10,6,10));
$students[] = (new Student(3,'Ana','CSMB',null,7,10,10));
$students[] = (new Student(4,'Cuka','CSMB',6,7,6,10));
$students[] = (new Student(5,'Jasmina','CSM',6,null,6,6));

if (isset($_GET['student'])) {
	echo $students[$_GET['student']-1]->toString();
}
 ?>

<form action="school-board.test.php" method="GET">
	<input type="text" name="student">
	<input type="submit">
</form>
