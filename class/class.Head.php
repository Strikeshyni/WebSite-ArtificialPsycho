<?php
class Head
{
	private $_head;
	
	public function addhead($type_link,$css_link,$title,$charset,$type)
	{
		if($type == 1)
		{
			$this->_head="
				<!Doctype html>
				<html>
					<head>

						<meta charset='".$charset."'>

						<title>".$title."</title>

						<link rel='icon' href='icon/icon.ico'>
						
						<link rel='".$type_link."' href='".$css_link."'>
					</head>
					";
		}
		else
		{
			$this->_head="
				<!Doctype html>
				<html>
					<head>

						<meta charset='".$charset."'>

						<title>".$title."</title>

						<link rel='icon' href='../icon/icon.ico'>
						<link rel='".$type_link."' href='".$css_link."'>

					</head>
					";
		}
		
	}

	public function getaddhead()
	{
	return $this->_head;
	}
}
/*
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>					
<link href='https://fonts.googleapis.com/css2?family=Creepster&display=swap' rel='stylesheet'>
*/
?>
