<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.pg-dbname.php3', 'pg_DBname'),
  'next' => array('function.pg-exec.php3', 'pg_Exec'),
  'up'   => array('ref.pgsql.php3', 'PostgreSQL functions'),
  'toc'  => array(
    array('ref.pgsql.php3#I(REF.PGSQL)C(1,TITLE)', ''),
    array('function.pg-close.php3', 'pg_Close'),
    array('function.pg-cmdtuples.php3', 'pg_cmdtuples'),
    array('function.pg-connect.php3', 'pg_Connect'),
    array('function.pg-dbname.php3', 'pg_DBname'),
    array('function.pg-errormessage.php3', 'pg_ErrorMessage'),
    array('function.pg-exec.php3', 'pg_Exec'),
    array('function.pg-pconnect.php3', 'pg_pConnect'))));
manualHeader('pg_ErrorMessage');
?><H1
>pg_ErrorMessage</H1
><P
>pg_ErrorMessage -- </P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>string pg_errormessage(int connection);<P
>     Returns a string containing the error message, false on
     failure.Details about the error probably cannot be retrieved
     using the <A
HREF="function.pg-errormessage.php3"
>pg_errormessage</A
>
     function If an error occured on the last database action for
     which a valid connection exists, this function will return a
     string containing the error message generated by the backend
     server.

   </P
></DIV
><?php manualFooter('pg_ErrorMessage');?>