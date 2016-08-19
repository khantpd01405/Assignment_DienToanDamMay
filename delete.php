<?
  include_once("demo.php");
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if($_GET['name']==1){
    deleteDb("khach_hang","ma_kh",$_REQUEST["id"]);
      }
        if($_GET['name']==2){
        deleteDb("loai_sanpham","ma_lsp",$_REQUEST["id"]);
      }
      if($_GET['name']==3){
      deleteDb("san_pham","ma_sp",$_REQUEST["id"]);
      }
      if($_GET['name']==4){
      deleteDb("hoa_don","ma_hd",$_REQUEST["id"]);
      }
      if($_GET['name']==5){
      deleteDb("chitiet_hoadon","ma_chitiethd",$_REQUEST["id"]);
      }
  }else{
    echo "no";
}


?>
