<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('khada', '9034725985', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM COURSES');
oci_execute($stid);

while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        var_dump(oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS));
    }
}