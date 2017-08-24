<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$email = @$_POST['email'];
$comment = @$_POST['comment'];

// Marge all the variables with text in a single variable. 
$f_data= '
Name : '.$name.'
Email :  '.$email.'
Comments: '.$comment.'  
==============================================================================
';
// Write the name of text file where data will be store
$filnme_epub="mydata";
$sites = realpath(dirname(__FILE__)).'/';
 $newfile = $sites.$filnme_epub.".txt";
 if (file_exists($newfile)) {
          $fh = fopen($newfile, 'w') or die('cant do');
          fwrite($fh, $f_data);
        } else {
            echo "sfaf";
          $fh = fopen($newfile, 'wb');
          fwrite($fh, $f_data);
        }
        fclose($fh);

        chmod($newfile, 0777);
    //   echo ( is_writable($filnme_epub.".txt") ) ? 'writable' : 'not writable'; die;
    //    echo ( is_readable($filnme_epub.".txt") ) ? 'readable' : 'not readable'; die;





echo 'Form data has been saved to '.$filename.'  <br>
<a href="'.$filename.'">Click here to read </a> ';
$file = fopen($filename, "w");
fwrite($file,$f_data);
fclose($file);
?>