<?php 

//This class converts students info in to JSON.
class ToJSON {

	public static function convert($students){
		$json ="";
		foreach ($students as $student) {
			$json = $json."<br>".json_encode($student->toString());
		}
		return $json;
	}
}

 ?>