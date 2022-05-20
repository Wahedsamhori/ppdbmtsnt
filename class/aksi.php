<?php

class aksi extends database
{
	public $pdo;
	public $param;

	function __construct () {
		$this -> pdo = $this -> connect ();
	}

	public function custom_query ( $query ) {
		$stmt = $this -> pdo -> prepare (
			$query
		);
		$stmt -> execute ();
		return $stmt -> fetchAll(PDO::FETCH_OBJ) ;
	}

	public function delete_from ( $array = array() ) {

		$ar = array (
			"table" => "" ,
			"param" => ""
		);

		$ph = array_merge ( $ar , $array );
		$stmt = $this -> pdo -> prepare (
			"delete  from {$ph['table']} {$ph['param']} "
		);
		$stmt -> execute ();
		return "deleted";
	}


	public function select_from ( $array = array() ) {

		$ar = array (
			"table" => "" ,
			"param" => ""
		);

		$ph = array_merge ( $ar , $array );
		$stmt = $this -> pdo -> prepare (
			"select * from {$ph['table']} {$ph['param']} "
		);
		$stmt -> execute ();
		return $stmt -> fetchAll(PDO::FETCH_OBJ) ;

	}

	public function add ( $array = array() ) {

		$ar = array (
			"table" => "",
			"value" => array ()
		);

		/**
		 * $arr value = $key -> $value
		 */

		$ap =  array_merge ( $ar , $array );
		$ak = null;
		$ad = null;
		$tq = null;

		$val = $ap['value'];
		foreach ($val as $key => $value) {
			$ak[] = $key;
			$ad[] = "{}";
			$tq[] = "?";
		}

		$dq = $ak;
		$ak = implode("," , $ak);
		$tq = implode(",",$tq);

		$qr = implode(",",$ad);
		$edd = null;
		foreach ($dq as $key => $value) {
			$edd[] = "'{$val[$value]}'";
		}
		$edd = implode("," , $edd);
		$stmt = $this -> pdo -> query ("insert into {$ap['table']} ({$ak}) values ({$edd})");

		return "added";
	}

	public function update ( $array = array() ) {

		$ar = array (
			"table" => "",
			"param" => "",
			"value" => "" ,
			"id_param" => "",
			"id_value" => ""
		);

		$ap = array_merge ( $ar , $array );
		$update_val = $ap['value'];
		$id_value = $ap['id_value'];

		$stmt = $this -> pdo -> prepare ("update {$ap['table']} set {$ap['param']} = ? where {$ap['id_param']} = ? ");
		$stmt -> bindparam ( 1 , $update_val );
		$stmt -> bindparam ( 2 , $id_value );
		$stmt -> execute ();

		return "updated";
	}

	public function custom_update ( $array = array () ) {

		$ar = array (
			"table" => "",
			"param" => "",
			"id_param" => "",
			"id_value" => ""
		);

		$ap = array_merge ( $ar , $array );
		$id_value = $ap['id_value'];

		$stmt = $this -> pdo -> prepare ("update {$ap['table']} set {$ap['param']} where {$ap['id_param']} = ? ");
		$stmt -> bindparam ( 1 , $id_value );
		$stmt -> execute ();

		return "updated";

	}

	public function search ( $field = null, $query = null , $param = null ) {
		if ( !empty ( $field ) && !empty ( $query ) ) {
			return $this -> select_from (
				array (
					"table" => $field ,
					"param" => " where {$param} like '%{$query}%' limit 20 offset 0"
				)
			);
		}
	}

	public function get_user_by_id ( $id = null ) {
		if ( !empty ( $id ) ) {
			$data_user = $this -> select_from ( array (
				"table" => "user" ,
				"param" => " where id = '{$id}' "
			));
			return $data_user[0];
		}
	}

	public function get_something_by_id ( $field = null , $id = null ) {
		if ( !empty ( $id ) && !empty ( $field ) ) {
			$stmt = $this -> pdo -> prepare (
				"select * from {$field} where id = '{$id}' "
			);
			$stmt -> execute ();
			return $stmt -> fetchObject ();
		}
		else {
			return null;
		}

	}
}