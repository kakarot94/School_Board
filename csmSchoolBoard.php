<?php 

//This is subclass of class SchoolBoard.
class CsmSchoolBoard implements SchoolBoard {

	//checks if student failed or passed. If students average grades is bigger then 7,
	//then student passed. If not, student failed.
	public static function failOrPass($grades){
		$averageGrades = null;

		foreach ($grades as $grade) {
			$averageGrades +=$grade;
		}

		if ($averageGrades >= 7) {
			return "pass";
		} else {
			return "fail";
		}
	}

	//convert student info to XML
	public static function convertToJson($students){
		$json ="";
		foreach ($students as $student) {
			if ($student->getSchoolBoard() == "CSM") {
				$json = $json."<br>".json_encode($student->studentInfo());
			}
		}
		return $json;
	}
}

 ?>