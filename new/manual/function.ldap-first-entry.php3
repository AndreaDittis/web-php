<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.ldap-first-attribute.php3', 'ldap_first_attribute'),
  'next' => array('function.ldap-free-entry.php3', 'ldap_free_entry'),
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
manualHeader('ldap_first_entry');
?><H1
>ldap_first_entry</H1
><P
>ldap_first_entry -- </P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>int ldap_first_entry(int link_identifier, int result_identifier);<P
>    returns the result entry identifier for the first entry on success and
    false on error.
    </P
><P
>  
    Entries in the LDAP result are read sequentially using the ldap_first_entry()
    and ldap_next_entry() functions. ldap_first_entry() returns the entry
    identifier for first entry in the result. This entry identifier is then
    supplied to <A
HREF="function.ldap-next-entry.php3"
> ldap_next_entry()
	</A
> routine to get successive entries from the result.
	</P
><P
>	see also.<A
HREF="function.ldap-get-entries.php3"
> ldap_get_entries() </A
>
   </P
></DIV
><?php manualFooter('ldap_first_entry');?>