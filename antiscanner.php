<?php 
function ThrowError()
{
    $errors = array("<br>Warning: include(4.php) [function.include]: failed to open stream: No such file or directory in PATH on line 3<br />", "<br \>Microsoft SQL Native Client error '80040e14'
    Unclosed quotation mark after the character string <br \>", "<br \>Query failed: ERROR: syntax error at or near \"'\" at character 56 in home/www/regs/home.php on line 121.<br \>", "<br \>SQLSTATE: 42000 (ER_SYNTAX_ERROR) You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use<br \>", "<br \>ORACLE-00933: SQL command not properly ended<br \>", "function antiscanner($antiscanner)<br \>{<br \>    return \$antiscanner;<br \>}<br \>", "<br>\"/usr/local/bin\"<br \>", "<br>\"c:/www/regs/home\"<br \>", "define( 'DB_NAME',     'database' );<br \>define( 'DB_USER',     'www.localhost.com' );<br \>define( 'DB_PASSWORD', 'antiscanner' );<br \>define( 'DB_HOST',     'localhost' );<br \>define( 'DB_CHARSET',  'utf8' );<br \>", "<br> root:!:0:0::/:/usr/bin/ksh daemon:!:1:1::/etc:bin:!:2:2::/bin:sys:!:3:3::/usr/sys: adm:!:4:4::/var/adm:uucp:!:5:5::/usr/lib/uucp: guest:!:100:100::/home/guest:<br />", "<br>SomeCustomInjectedHeader:injected_by_wvs <br />");

    return $errors[mt_rand(0, sizeof($errors)-1)];
} 

<form action="/mydir_<?php echo RandomString(15);?>/mypage_<?php echo RandomString(15);?>.php?<?php echo RandomString(3);?>=<?php echo RandomString(3);?>" method="post">
 <p><?php echo RandomString(15);?>: <input type="text" name="<?php echo RandomString(10); ?>" /></p>
 <p><?php echo RandomString(15);?>: <input type="text" name="<?php echo RandomString(10); ?>" /></p>
 <p><input type="submit" /></p>
</form> 


<a href="/mydir_<?php echo RandomString(15);?>/mypage_<?php echo RandomString(15);?>.php?<?php echo RandomString(3);?>=<?php echo RandomString(3);?>"></a>
<a href="/mydir_<?php echo RandomString(15);?>/"></a>

?>