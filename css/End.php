<?
if ($DBString['DB_TYPE']=="MsSql"){
	if (gettype($row)=="resource"){
		mssql_free_result($row);
	}
	if (gettype($conn)=="resource"){	
		mssql_close($conn);	
	}
}else{
	if (gettype($row)=="resource"){
		mysql_free_result($row);
	}
	if (gettype($conn)=="resource"){	
		mysql_close($conn);	
	}
}


?>