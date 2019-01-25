<?php

class Form {

	public function create($action)
	{
	return '<form method="POST" action=" ' . $action . '">';
	}
	public function inputText($type, $name)
	{
	return '<input type=" ' . $type . ' " name=" ' . $name . '">';
	}
	public function selectOpen($genre)
	{
	return '<select name="' . $genre . '" id="">';
 	}
	public function option($value)
	{
	return '<option value="'.$value.'">'.$value.'</option>';
	}
	public function selectClose()
	{
	return '</select>';
 	}
 	public function textarea($text, $rows, $cols)
 	{
 	return ' ' . $text . '<textarea name="comment" rows="' . $rows . '" cols="' . $cols . '"></textarea>';
 	}
 	public function inputRadio($radio)
	{
	return '<div> <input type="radio" name="" value=" '. $radio . '" > <label for="'. $radio . '"> '. $radio .' </label></div>';
	}
 	public function inputCheckbox($checkbox)
	{
	return '<div><input type="checkbox" name="" value=" '. $checkbox . '"  >  <label for="'.$checkbox . '"> ' .$checkbox .' </label></div>';
	}
 	public function submit($modifier)
	{
	return '<button type="submit"> ' . $modifier . ' </button>';
	}
	public function end()
	{
	return '</form>';
	}

 }


?>