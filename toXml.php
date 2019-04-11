<?php 

//This class converts students info to XML
class ToXmlFile {
	private $rowCount;
	private $students;

	public function __construct($students){
		$this->students = $students;
	}

	private function createXML(){
		$this->rowCount = count($this->students);

		$xmlDoc = new DOMDocument();
		$root = $xmlDoc->appendChild($xmlDoc->createElement("user_info"));
		$root->appentChild();
	}
}

 ?>