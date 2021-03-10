<?php
$conn = mysqli_connect('localhost','root','','QLBH');
if(!$conn){
    die("Kết nối thất bại: ".mysqli_connect_errno());
}
$sql ="INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `DienGiai`) VALUES ('LSP006', 'Bộ Nguồn máy', 'Các loại bộ nguồn máy')";
mysqli_select_db('QLBH');
if(mysqli_query($conn,$sql)){
    echo "Tạo CSDL thành công!";
}
else{
    echo "Tạo CSDL thất bại!".mysqli_error($conn);
}
mysqli_close($conn);
?>