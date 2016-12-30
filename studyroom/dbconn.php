<?php // Before running, create the table:

	
	function dbconn(){
		
		$conn = oci_connect('woosun', 'qwer1234' , 'localhost/study');
			if (!$conn) {
				$e = oci_error();
				trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
			}
		return $conn;
		}
	function adminSelect(){
		$conn=dbconn();
		$sql ="select * from admin";
		$stid = oci_parse($conn, $sql);
		oci_execute($stid);
		$row=oci_fetch_array($stid,OCI_BOTH);
		
		return $row;
	}
	
	function study_info_Select(){
		$conn=dbconn();
		$sql ="select * from study_info";
		$stid = oci_parse($conn, $sql);
		oci_execute($stid);
		$row=oci_fetch_array($stid,OCI_BOTH);
	
		return $row[1];
	}
	function teacher_info_Select(){
		$conn=dbconn();
		$sql ="select * from teacher_info";
		$stid = oci_parse($conn, $sql);
		oci_execute($stid);
		$row=oci_fetch_array($stid,OCI_BOTH);
	
		return $row[1];
	}
	function study_info_update($chang_string){
		$conn=dbconn();
		
		$stid = oci_parse($conn, "update study_info set st_inStr = :str where st_inID = '1'");
		oci_bind_by_name($stid, ':str', $chang_string);
		oci_execute($stid);
		$memo = "su";
		return $memo;
	}
	function teacher_info_update($chang_string){
		$conn=dbconn();
	
		$stid = oci_parse($conn, "update teacher_info set te_inStr = :str where te_inID = '1'");
		oci_bind_by_name($stid, ':str', $chang_string);
		oci_execute($stid);
		$memo = "su";
		return $memo;
	}


?>
