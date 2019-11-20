<?php
$conn = mssql_connect("servername", "<user>", "<password>");
 mssql_select_db( "Database1", $conn );
 $query_result = mssql_query( "SELECT field1 FROM Table1", $conn );
 echo "The field number one is: ";
 echo mssql_result ($query_result, 0, 0);
 mssql_close($conn); 
 ?> 
