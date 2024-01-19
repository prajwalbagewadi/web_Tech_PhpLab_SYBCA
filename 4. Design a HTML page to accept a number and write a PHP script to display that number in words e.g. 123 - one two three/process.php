<?php 
    $num=$_POST['num'];
    $data=(string)$num;
    echo "data_len=".strlen($data)."<br>";
    $ans;
    for($i=0;$i<strlen($data);$i++){
        $ans=(int)$data[$i];
        switch($ans)
        {
            case 0:
                echo "zero";
                break;
            case 1:
                echo "one";
                break;   
            case 2:
                echo "two";
                break;
            case 3:
                echo "three";
                break;
            case 4:
                echo "four";
                break;
            case 5:
                echo "five";
                break;
            case 6:
                echo "six";
                break;
            case 7:
                echo "seven";
                break;
            case 8:
                echo "eight";
                break;
            case 9:
                echo "nine";
                break;                                   
        }
    }
?>    
