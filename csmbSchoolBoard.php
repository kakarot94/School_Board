<?php 

//This is subclass of class SchoolBoard.
class CsmbSchoolBoard implements SchoolBoard {

	//checks if student failed or passed. If students have more then two grades and his biggest
	//grade is bigger then 8, student passed. If not, student failed.
	public static function failOrPass($grades){
		if (count($grades) - 1 > 2) {
			if ($grades[count($grades)-1] > 8) {
				return "pass";
			} else {
				return "fail";
			}
		} else {
			return "fail";
		}
	}

	//convert student info to XML 
	public static function convertToXml(){
		$xml ="";
		foreach ($students as $student) {
			if ($student->getSchoolBoard() == "CSMB") {
				
			}
		}
		return $xml;
	}
}

 ?>