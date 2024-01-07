<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $data=(string)$num;
    $ans;
    echo(" len of data=".strlen($data));
    for($i=0;$i<3;$i++)
    {
        echo("<br> data=".$data[$i]);
        $num1=(int)$data[$i];
        $ans+=$num1*$num1*$num1;
        echo("<br> ans=".$ans);
    }
    if($num==$ans)
    {
        echo("<br> num=".$num." is a armstrong num");
    }
    else
    {
        echo("<br> num=".$num." is not armstrong num");   
    }
}
?>
