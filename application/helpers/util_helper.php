<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('add_array_key'))
{
	function add_array_key($field, $array)
	{
		$data = array();
		foreach ($array as $key => $value) {
			$data[$value[$field]] = $value;
		}

		return $data;
	}
}

if ( ! function_exists('split_char'))
{
	function split_char($str, $limit = 150, $opt = 0) {  
	    $string = mb_substr($str,0, $limit, 'UTF-8');
	    if($opt == 1) { // Kiểu cắt thêm
	        $tempLen = mb_strlen($string);
	        for($i = $limit; $i < $tempLen; $i++) {
	            $str_tmp = mb_substr($str, $i,1, 'UTF-8');
	            if($str_tmp != ' ') {
	                $string .= $str_tmp;
	            }
	            else { break; die(); }
	        }
	    }
	    elseif($opt == 0) { //Kiểu cắt bớt
	        for($i = $limit; $i > 2; $i--) {
	            $str_tmp = mb_substr($str, $i, 1, 'UTF-8');
	            if($str_tmp != ' ') {
	                $string = mb_substr($string,0, -1, 'UTF-8');
	            }
	            else {break;}
	        }
	    }

	    return $string;
	}
}
?>