<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.msql-numrows.php3', 'msql_numrows'),
  'next' => array('function.msql-query.php3', 'msql_query'),
  'up'   => array('ref.msql.php3', 'mSQL Functions'),
  'toc'  => array(
    array('ref.msql.php3#I(REF.MSQL)C(1,TITLE)', ''),
    array('function.msql.php3', 'msql'),
    array('function.msql-close.php3', 'msql_close'),
    array('function.msql-connect.php3', 'msql_connect'),
    array('function.msql-create-db.php3', 'msql_create_db'),
    array('function.msql-createdb.php3', 'msql_createdb'),
    array('function.msql-data-seek.php3', 'msql_data_seek'),
    array('function.msql-dbname.php3', 'msql_dbname'),
    array('function.msql-drop-db.php3', 'msql_drop_db'),
    array('function.msql-fetch-array.php3', 'msql_fetch_array'),
    array('function.msql-fetch-field.php3', 'msql_fetch_field'),
    array('function.msql-fetch-object.php3', 'msql_fetch_object'),
    array('function.msql-fetch-row.php3', 'msql_fetch_row'),
    array('function.msql-field-name.php3', 'msql_fieldname'),
    array('function.msql-field-seek.php3', 'msql_field_seek'),
    array('function.msql-field-table.php3', 'msql_fieldtable'),
    array('function.msql-field-type.php3', 'msql_fieldtype'),
    array('function.msql-fieldflags.php3', 'msql_fieldflags'),
    array('function.msql-fieldlen.php3', 'msql_fieldlen'),
    array('function.msql-freeresult.php3', 'msql_freeresult'),
    array('function.msql-list-fields.php3', 'msql_list_fields'),
    array('function.msql-listdbs.php3', 'msql_listdbs'),
    array('function.msql-listtables.php3', 'msql_listtables'),
    array('function.msql-num-fields.php3', 'msql_num_fields'),
    array('function.msql-num-rows.php3', 'msql_num_rows'),
    array('function.msql-numfields.php3', 'msql_numfields'),
    array('function.msql-numrows.php3', 'msql_numrows'),
    array('function.msql-pconnect.php3', 'msql_pconnect'),
    array('function.msql-query.php3', 'msql_query'),
    array('function.msql-result.php3', 'msql_result'),
    array('function.msql-select-db.php3', 'msql_select_db'),
    array('function.msql-tablename.php3', 'msql_tablename'))));
manualHeader('msql_pconnect');
?><H1
>msql_pconnect</H1
><P
>msql_pconnect -- open persistent mSQL connection</P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>int msql_pconnect(string hostname);<P
>     Returns a positive mSQL persistent link identifier on success, or
     false on error.
    </P
><P
>      
     msql_pconnect() acts very much like <A
HREF="function.msql-connect.php3"
>msql_connect</A
> with two
     major differences.
    </P
><P
>  
     First, when connecting, the function would first try to find
     a (persistent) link that's already open with the same
     host.  If one is found, an identifier for it will be returned
     instead of opening a new connection.
    </P
><P
>  
     Second, the connection to the SQL server will not be closed when
     the execution of the script ends.  Instead, the link will remain
     open for future use (<A
HREF="function.msql-close.php3"
>msql_close</A
> will not
     close links established by msql_pconnect()).
    </P
><P
>  
     This type of links is therefore called 'persistent'.
   </P
></DIV
><?php manualFooter('msql_pconnect');?>