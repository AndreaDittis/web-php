<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('function.basename.php3', 'basename'),
  'next' => array('function.copy.php3', 'copy'),
  'up'   => array('ref.filesystem.php3', 'Filesystem Functions'),
  'toc'  => array(
    array('ref.filesystem.php3#I(REF.FILESYSTEM)C(1,TITLE)', ''),
    array('function.chgrp.php3', 'chgrp'),
    array('function.chmod.php3', 'chmod'),
    array('function.chown.php3', 'chown'),
    array('function.clearstatcache.php3', 'clearstatcache'),
    array('function.fclose.php3', 'fclose'),
    array('function.feof.php3', 'feof'),
    array('function.fgetc.php3', 'fgetc'),
    array('function.fgets.php3', 'fgets'),
    array('function.fgetss.php3', 'fgetss'),
    array('function.file.php3', 'file'),
    array('function.fileatime.php3', 'fileatime'),
    array('function.filectime.php3', 'filectime'),
    array('function.filegroup.php3', 'filegroup'),
    array('function.fileinode.php3', 'fileinode'),
    array('function.filemtime.php3', 'filemtime'),
    array('function.fileowner.php3', 'fileowner'),
    array('function.fileperms.php3', 'fileperms'),
    array('function.filesize.php3', 'filesize'),
    array('function.filetype.php3', 'filetype'),
    array('function.fileumask.php3', 'fileumask'),
    array('function.fopen.php3', 'fopen'),
    array('function.fpassthru.php3', 'fpassthru'),
    array('function.fputs.php3', 'fputs'),
    array('function.fseek.php3', 'fseek'),
    array('function.ftell.php3', 'ftell'),
    array('function.mkdir.php3', 'mkdir'),
    array('function.pclose.php3', 'pclose'),
    array('function.popen.php3', 'popen'),
    array('function.readfile.php3', 'readfile'),
    array('function.rename.php3', 'rename'),
    array('function.rewind.php3', 'rewind'),
    array('function.rmdir.php3', 'rmdir'),
    array('function.stat.php3', 'stat'),
    array('function.tempnam.php3', 'tempnam'),
    array('function.touch.php3', 'touch'),
    array('function.basename.php3', 'basename'),
    array('function.dirname.php3', 'dirname'),
    array('function.copy.php3', 'copy'))));
manualHeader('dirname');
?><H1
>dirname</H1
><P
>dirname -- return file name part of path</P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>string dirname(string path);<P
>     Given a string containing a path to a file, this function will
     return the name of the directory.
    </P
><P
>     On Windows, both slash (<TT
CLASS="LITERAL"
>/</TT
>) and backslash
     (<TT
CLASS="LITERAL"
>\</TT
>) are used as path separator character.  In
     other environments, it is the forward slash
     (<TT
CLASS="LITERAL"
>/</TT
>).
    </P
><P
>     <DIV
CLASS="EXAMPLE"
><P
><B
>Example 1. <B
CLASS="FUNCTION"
>dirname()</B
> example</B
></P
><PRE
CLASS="PROGRAMLISTING"
>$path = "/etc/passwd";
$file = dirname($path); // $file is set to "/etc"</PRE
></DIV
>
  
    </P
><P
>     See also:
     <A
HREF="function.basename.php3"
><B
CLASS="FUNCTION"
>basename()</B
></A
>
   </P
></DIV
><?php manualFooter('dirname');?>