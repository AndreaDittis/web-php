<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.ldap-get-dn.php3', 'ldap_get_dn'),
  'next' => array('function.ldap-get-values.php3', 'ldap_get_values'),
  'up'   => array('ref.ldap.php3', 'LDAP Functions'),
  'toc'  => array(
    array('ref.ldap.php3#I(REF.LDAP)C(1,TITLE)', ''),
    array('function.ldap-add.php3', 'ldap_add'),
    array('function.ldap-bind.php3', 'ldap_bind'),
    array('function.ldap-close.php3', 'ldap_close'),
    array('function.ldap-connect.php3', 'ldap_connect'),
    array('function.ldap-count-entries.php3', 'ldap_count_entries'),
    array('function.ldap-delete.php3', 'ldap_delete'),
    array('function.ldap-first-attribute.php3', 'ldap_first_attribute'),
    array('function.ldap-first-entry.php3', 'ldap_first_entry'),
    array('function.ldap-free-entry.php3', 'ldap_free_entry'),
    array('function.ldap-free-result.php3', 'ldap_free_result'),
    array('function.ldap-get-attributes.php3', 'ldap_get_attributes'),
    array('function.ldap-get-dn.php3', 'ldap_get_dn'),
    array('function.ldap-get-entries.php3', 'ldap_get_entries'),
    array('function.ldap-get-values.php3', 'ldap_get_values'),
    array('function.ldap-list.php3', 'ldap_list'),
    array('function.ldap-modify.php3', 'ldap_modify'),
    array('function.ldap-next-attribute.php3', 'ldap_next_attribute'),
    array('function.ldap-next-entry.php3', 'ldap_next_entry'),
    array('function.ldap-read.php3', 'ldap_read'),
    array('function.ldap-search.php3', 'ldap_search'),
    array('function.ldap-unbind.php3', 'ldap_unbind'))));
manualHeader('ldap_get_entries');
?><H1
>ldap_get_entries</H1
><P
>ldap_get_entries -- </P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>int ldap_get_entries(int link_identifier, int result_identifier);<P
>    returns a complete result information in a multi-dimenasional array on
    success and false on error.
    </P
><P
>  
    ldap_get_entries() function is used to simplify reading multiple entries
    from the result and then reading the attributes and multiple values. The
    entire information is returned by one function call in a multi-dimensional
    array. The structure of the array is as follows.
    </P
><P
>    <PRE
CLASS="PROGRAMLISTING"
>    return_value["count"] = number of entries in the result
    return_value[0] : refers to the details of first entry

    return_value[i]["dn"] =  DN of the ith entry in the result

    return_value[i]["count"] = number of attributes in ith entry
    return_value[i][j] = jth attribute in the ith entry in the result

    return_value[i]["attribute"]["count"] = number of values for attribute in ith entry
    return_value[i]["attribute"][j] = jth value of attribute in ith entry
    </PRE
>
	
	see also <A
HREF="function.ldap-first-entry.php3"
> ldap_first_entry()
	</A
> and <A
HREF="function.ldap-next-entry.php3"
> ldap_next_entry()
	</A
>
   </P
></DIV
><?php manualFooter('ldap_get_entries');?>