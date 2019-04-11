<?php 
include 'schoolBoard.php';

class Student {
	private $ID;
	private $name;
	private $schoolBoard;
	private $grades = array();

	public function __construct($ID, $name, $schoolBoard, $classOne, $classTwo, $classThree, $classFour){
		$this->ID = $ID;
		$this->name = $name;
		$this->schoolBoard = $schoolBoard;
		$this->isItNull($classOne);
		$this->isItNull($classTwo);
		$this->isItNull($classThree);
		$this->isItNull($classFour);
	}

	//checks wheter input grade is null or not. If input grade is null, it wont be inserted 
	//in array. 
	public function isItNull($grade){
		if (!is_null($grade)) {
			$this->grades[] = ($grade);
		}
	}

	//This method returns in what school board is student.
	public function getSchoolBoard(){
		return $this->schoolBoard;
	}

	//This method returns average grades of the student.
	private function avgGrades(){
		sort($this->grades);
		$avgGrades = null;
		foreach ($this->grades as $grade) {
			$avgGrades +=$grade;
		}
		return $avgGrades /= count($this->grades);
	}

	//This method convert averageGrades array in to string.
	public function gradesString(){
		$gradeString = "";
		foreach ($this->grades as $grade) {
			$gradeString = $gradeString."".$grade.",";
		}
		return $gradeString;
	}

	//using school boards this method will return wheter student failed or passed.
	public function finalResult(){
		switch ($this->schoolBoard) {
			case 'CSMB':
				return CsmbSchoolBoard::failOrPass($this->grades);
				break;

			case 'CSM':
				return CsmSchoolBoard::failOrPass($this->grades);
				break;
			
			default:
				return "This student is not in CSM or CSMB school board.";
				break;
		}
	}

	public function studentInfo(){
		return $studentInfo = array("ID" => $this->ID,
							 		"Student name" => $this->name,
							   		"School board" => $this->schoolBoard,
							 		"Student grades" => $this->gradesString(),
									"Average grades" => $this->avgGrades(),
							 		"Final result" => $this->finalResult());
	}
	public function toString(){

		return  "ID :".$this->ID." ".
				"Student name :".$this->name." ".
				"School board :".$this->schoolBoard." ".
			 	"Student grades :".$this->gradesString()." ".
				"Average grades :".$this->avgGrades()." ".
			 	"Final result :".$this->finalResult();
	}
}

 ?>