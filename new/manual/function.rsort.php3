<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.reset.php3', 'reset'),
  'next' => array('function.sort.php3', 'arsort'),
  'up'   => array('ref.array.php3', 'Array Functions'),
  'toc'  => array(
    array('ref.array.php3#I(REF.ARRAY)C(1,TITLE)', ''),
    array('function.arsort.php3', 'arsort'),
    array('function.asort.php3', 'arsort'),
    array('function.count.php3', 'count'),
    array('function.sizeof.php3', 'sizeof'),
    array('function.current.php3', 'current'),
    array('function.next.php3', 'next'),
    array('function.prev.php3', 'prev'),
    array('function.key.php3', 'key'),
    array('function.reset.php3', 'reset'),
    array('function.rsort.php3', 'arsort'),
    array('function.sort.php3', 'arsort'),
    array('function.end.php3', 'end'))));
manualHeader('arsort');
?><H1
>arsort</H1
><P
>arsort -- Sort an array in reverse order</P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>void rsort(array array);<P
>	This function sorts an array in reverse order (highest to lowest).
	<DIV
CLASS="EXAMPLE"
><P
><B
>Example 1. rsort() example</B
></P
><PRE
CLASS="PROGRAMLISTING"
>    $fruits = array("lemon","orange","banana","apple");
    rsort($fruits);
    for(reset($fruits); $key = key($fruits); next($fruits)) {
        echo "fruits[$key] = ".$fruits[$key]."\n";
    }
	</PRE
></DIV
>
	This example would display:
	<TT
CLASS="COMPUTEROUTPUT"
>	fruits[0] = orange
	fruits[1] = lemon
	fruits[2] = banana
	fruits[3] = apple
	</TT
>
	The fruits have been sorted in reverse alphabetical order.
    </P
><P
>     See also:
     <A
HREF="function.arsort.php3"
><B
CLASS="FUNCTION"
>arsort()</B
></A
>,
     <A
HREF="function.asort.php3"
><B
CLASS="FUNCTION"
>asort()</B
></A
>, and
     <A
HREF="function.sort.php3"
><B
CLASS="FUNCTION"
>sort()</B
></A
>.
   </P
></DIV
><?php manualFooter('arsort');?>