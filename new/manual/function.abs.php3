<?php 
require('shared-manual.inc'); 
setupNavigation(array(
  'home' => array('manual.php3', 'PHP3 Manual'),
  'prev' => array('ref.math.php3', 'Mathematical Functions'),
  'next' => array('function.acos.php3', 'Acos'),
  'up'   => array('ref.math.php3', 'Mathematical Functions'),
  'toc'  => array(
    array('ref.math.php3#I(REF.MATH)C(1,TITLE)', ''),
    array('function.abs.php3', 'Abs'),
    array('function.acos.php3', 'Acos'),
    array('function.asin.php3', 'Asin'),
    array('function.atan.php3', 'Atan'),
    array('function.bindec.php3', 'BinDec'),
    array('function.ceil.php3', 'Ceil'),
    array('function.cos.php3', 'Cos'),
    array('function.decbin.php3', 'DecBin'),
    array('function.dechex.php3', 'DecHex'),
    array('function.decoct.php3', 'DecOct'),
    array('function.exp.php3', 'Exp'),
    array('function.floor.php3', 'Floor'),
    array('function.hexdec.php3', 'HexDec'),
    array('function.log.php3', 'Log'),
    array('function.log10.php3', 'Log10'),
    array('function.max.php3', 'max'),
    array('function.min.php3', 'min'),
    array('function.octdec.php3', 'OctDec'),
    array('function.pow.php3', 'pow'),
    array('function.sin.php3', 'Sin'),
    array('function.sqrt.php3', 'Sqrt'),
    array('function.tan.php3', 'Tan'))));
manualHeader('Abs');
?><H1
>Abs</H1
><P
>Abs -- absolute value</P
><DIV
CLASS="REFSECT1"
><H2
>Description</H2
>mixed abs(mixed number);<P
>     Returns the absolute value of number.  If the argument number is
     float, return type is also float, otherwise it is int.

   </P
></DIV
><?php manualFooter('Abs');?>