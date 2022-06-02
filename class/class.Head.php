<?php
class Head
{
	private $_head;
	
	public function addhead($type_link,$css_link,$title,$charset,$type)
	{
		if($type == 1)
		{
			$this->_head="
				<!DOCTYPE html>
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
				<!DOCTYPE html>
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
?>
