<?php 
include 'csmbSchoolBoard.php';
include 'csmSchoolBoard.php';

//superclass for classes CsmbSchoolBoard and CsmSchoolBoard.
//note : more Schoole boards can be implemented if needed.
interface SchoolBoard{
	public static function failOrPass($grades);
}

 ?>