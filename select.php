,<table border="1px"> 
<?php
// $dbhost='localhost';
// $dbuser='root';
// $dbpass='';
echo "<td>";
$link = mysqli_connect("localhost","root","",'QLBH');   
    $str_select = "SELECT*from`loaisanpham`";
    mysqli_query($link,"SET NAMES 'utf8'");
    $result = mysqli_query($link,$str_select);
    echo "MÃ LOẠI SẢN PHẨM- TÊN LOẠI SẢN PHẨM - DIỄN GIẢI</br>";
    // while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC))
    // {
    //     print_r($row2['MaLSP']." ".$row2['TenLSP']." ".$row2['DienGiai']."</br>");
    // }
    
     while($row2 = mysqli_fetch_array($result,MYSQLI_NUM))
    {
        
        print_r($row2['0']." ".$row2['1']." ".$row2['2']."</br>");
       
    }
    echo "</td>";

mysqli_close($link);
?>
</table>