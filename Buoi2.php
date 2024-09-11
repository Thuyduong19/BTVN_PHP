<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </body>
    <?php
        // 1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
        echo '1.Số ký tự trong chuỗi:'. strlen("Xin chào")."<br>";

        // 2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
        echo '2.Số từ trong chuỗi:'.str_word_count("Xin chào")."<br>";

        // 3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
        echo '3. chuỗi đảo ngược:'.strrev("Xin chao")."<br>";

        // 4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
        echo '4.tìm kiếm Nam trong Xin chào Việt Nam'. strpos("Xin chào Việt Nam","Nam")."<br>";

        // 5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
        $str="Xin chào Việt Nam";
        echo "5.".$str."<br>";
        echo 'Thay thế Việt Nam bằng Thu Hoài: '.str_replace("Việt Nam","Thu Hoài",$str)."<br>";

        // 6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
        $str1="Nguyen Thi Thu Hoai";
        $str2="Nguyen";
        $result=strncmp($str1,$str2,6);
        if($result==0){
            echo"6. Chuỗi 1 bắt đầu bằng chuỗi 2 ".'<br>';
        }else{
            echo"6. Chuỗi 1 không bắt đầu bằng chuỗi 2 ".'<br>';
        }
    
        // 7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
        echo '7.Đổi chuỗi thành in hoa:'.strtoupper('thiet ke va trien khai ung dung web')."<br>";
        
        // 8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
        echo '8.Đổi chuỗi thành chữ thường:'.strtolower('thiet ke va trien khai ung dung web')."<br>";
        
        // 9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
        echo '9.Đổi chuỗi thành in hoa chữ cái đầu tiên:'. ucwords('thiet ke va trien khai ung dung web')."<br>";
        
        // 10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
       echo"10. loại bỏ khoảng trắng ở đầu và cuối chuỗi"."<br>";
        $str="    thiet ke va trien khai ung dung web  ";
       $trim_str=trim($str);
       echo"số kí tự chuỗi ban đầu:".strlen($str).'<br>';
       echo"số kí tự chuỗi sau loại bỏ khoảng trắng:".strlen($trim_str).'<br>';
       
       //11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
       $str='m thiet ke web';
       echo "11.chuỗi ban đầu:".$str.'<br>';
       echo "chuỗi sau khi bỏ m: ".ltrim("$str","m").'<br>';
       
       //12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
       $str='thiet ke web s';
       echo "12.chuỗi ban đầu:".$str.'<br>';
       echo "chuỗi sau khi bỏ s: ".rtrim("$str","s").'<br>';
       
       //13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
       $str="Hello,world,welcome,viet,nam";
       $exp_str=explode(",",$str);
       echo"13.Chuỗi ban đầu:".$str.'<br>';
       print_r($exp_str);echo"<br>";
       
       //14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
       $arr= array('xin','chao','Viet','Nam');
       echo"14.";
       print_r($arr);echo"<br>";
       $imp_arr=implode(',',$arr);
       echo" chuỗi sau khi nối các phần tử của mảng :".$imp_arr.'<br>';

       //15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
       $str="Thiết kế và triển khai web";
       echo"15.Chuỗi ban đầu: ".$str.'<br>';
       $add_str=" bằng php";
       $pad_str=str_pad($str,strlen($str)+ strlen($add_str),$add_str);
       echo"Chuỗi sau khi thêm: ".$pad_str.'<br>';

       //16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
       $str="Thiết kế và triển khai web";
       echo"16.Chuỗi ban đầu: ".$str.'<br>';
       $str2="web";
       $result=strrchr($str,$str2);
       if($result==False){
        echo"Chuỗi không kết thúc bằng ".$str2.'<br>';
        
        }else{
            echo"Chuỗi kết thúc bằng ".$result.'<br>';
        }

       //17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
       $str="Thiết kế và triển khai web";
       echo"17.Chuỗi ban đầu: ".$str.'<br>';
       $str2="php";
       $result=strstr($str,$str2);
       if(empty($result)){
        echo"Chuỗi không chứa:".$str2.'<br>';
       }else{
        echo"Chuỗi chứa: ".$str2.'<br>';
       }

       //18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
       $str="@ thuyduong 19";
       echo"18.Chuỗi ban đầu: ".$str.'<br>';
       $repla="hi";
       $result=preg_filter('/[^a-zA-Z0-9]/',$repla,$str);
       echo 'chuỗi sau khi thay thế ký tự khác chữ và số bằng '.$repla.':'. $result.'<br>';

       //19.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
       $var = 25;
        if (is_int($var)) {
        echo '19.'.$var.' thuộc kiểu số nguyên'.'<br>';
        }else{
        echo '19.'.$var.' không thuộc kiểu số nguyên'.'<br>';
        }

       //20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
       $email='thuyduong@gmail.com';
       if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"20. email ".$email." hợp lệ";
       }else{
        echo '20. email không hợp lệ';
       }
    ?>
</body>
</html>