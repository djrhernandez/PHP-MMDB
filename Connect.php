<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

define("USERNAME", "cs342");
define("PASSWORD", "c3m4p2s");

$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL=TCP)
			(HOST=delphi.cs.csub.edu) (PORT=1521)))
			(CONNECT_DATA=(SID=dbs01)))";

if ($link = oci_connect(USERNAME, PASSWORD, $db)) {
	//echo "Successfully connected to Oracle!\n";
} else {
	die('Could not connect: ' . oci_error($link));
}

/*
//Prepare the statement
$stid = oci_parse($link, 'SELECT * FROM CS3420.DHKW_EMPLOYEES');
if (!$stid) {
	$err = oci_error($link);
	trigger_error(htmlentities($err['message'], ENT_QUOTES), E_USER_ERROR);
}

//Perform the logic of the query
$r = oci_execute($stid);
if (!$r) {
	trigger_error(htmlentities($err['message'], ENT_QUOTES), E_USER_ERROR);
}

//Fetch the results of the query
print "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
	print "<tr>\n";
	foreach ($row as $item) {
		print " <td> " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
	}
	print "</tr>\n";
}
print "</table>\n";

oci_free_statement($stid);


oci_close($link);



//Connect to Oracle Database
*/
?>


