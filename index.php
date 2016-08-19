<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <link rel="stylesheet" href="css/materialize.min.css" media="screen" title="no title" charset="utf-8">
  <script src="js/jquery-3.1.0.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="row">
 <div class="col s12" style="margin-bottom: 50px;">
   <ul class="tabs">
     <li class="tab col s3"><a id="a1" href="#test1">Khách hàng</a></li>
     <li class="tab col s3"><a id="a2"  href="#test2">Loại sản phẩm</a></li>
     <li class="tab col s3"><a id="a3"  href="#test3">Sản phẩm</a></li>
     <li class="tab col s3"><a id="a4" href="#test4">Hóa đơn</a></li>
     <li class="tab col s3"><a id="a5" href="#test5">Chi tiết hóa đơn</a></li>
   </ul>
 </div>

<div id="test1" class="col s12 ">
  <div class="row">
    <form class="col s12" action="demo.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="icon_prefix" type="text" name ="id_kh"  class="validate" required>
          <label for="icon_prefix">Id khách hàng</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_telephone" type="text" name ="ten_kh" class="validate" required>
          <label for="icon_telephone">Tên khách hàng</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="phone" type="number" name ="phone" class="validate" required>
          <label for="phone">Phone number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <input id="diachi" type="text" name="diachi" class="validate" required>
          <label for="diachi">Địa chỉ</label>
        </div>
      </div>
      <div align=center>
        <button class='waves-effect waves-light btn' name="kh" type="submit">Thêm</button>
        <button class='waves-effect waves-light btn' >Hủy</button>
      </div>

    </form>
  </div>




          <table class="highlight centered">
            <thead>
              <tr>

                <th data-field="id">Id khách hàng</th>
                <th data-field="name">Tên khách hàng</th>
                <th data-field="price">Số điện thoại</th>
                <th data-field="price">Địa chỉ</th>
                <th data-field="edit">Tùy chọn</th>
              </tr>
            </thead>
            <tbody id="bd1">

            </tbody>
      </table>
    </div>

    <!-- test2 -->

 <div id="test2" class="col s12">
   <div class="row">
     <form class="col s12" action="demo.php" method="post">
       <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">assignment_late</i>
           <input id="icon_prefix" type="text" name ="id_lsp" class="validate" required>
           <label for="icon_prefix">Id loại sản phẩm</label>
         </div>
         <div class="input-field col s6">
           <i class="material-icons prefix">local_offer</i>
           <input id="icon_telephone" type="text" name ="ten_lsp" class="validate" required>
           <label for="icon_telephone">Tên loại sản phẩm</label>
         </div>
       </div>
       <div align=center>
         <button class='waves-effect waves-light btn' name="lsp" type="submit">Thêm</button>
         <button class='waves-effect waves-light btn' >Hủy</button>
       </div>

     </form>
   </div>
   <table class="highlight centered">
     <thead>
       <tr>
         <th data-field="id">Mã loại sản phẩm</th>
         <th data-field="name">Tên loại sản phẩm</th>
           <th data-field="edit">Tùy chọn</th>
       </tr>
     </thead>
     <tbody id="bd2">

     </tbody>
   </table>

 </div>

  <!-- test3  sp-->

 <div id="test3" class="col s12">
   <div class="row">
     <form class="col s12" action="demo.php" method="post">
       <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">line_weight</i>
           <input id="icon_prefix" type="text" name ="id_sp" class="validate" required>
           <label for="icon_prefix">Id sản phẩm</label>
         </div>
         <div class="input-field col s6">
           <i class="material-icons prefix">assignment_late</i>
           <input id="icon_telephone" type="text" name ="id_lsp" class="validate" required>
           <label >Id loại sản phẩm</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">style</i>
           <input id="phone" type="text" name ="ten_sp" class="validate" required>
           <label >Tên sản phẩm</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">shopping_cart</i>
           <input id="diachi" type="text" name="sl" class="validate" required>
           <label for="diachi">Số lượng</label>
         </div>
       </div>
       <div align=center>
         <button class='waves-effect waves-light btn' name="sp" type="submit">Thêm</button>
         <button class='waves-effect waves-light btn' >Hủy</button>
       </div>
     </form>
   </div>
   <table class="highlight centered">
     <thead>
       <tr>
         <th data-field="id">Id sản phẩm</th>
         <th data-field="price">Id loại sản phẩm</th>
         <th data-field="name">Tên sản phẩm</th>
         <th data-field="price">Số lượng</th>
         <th data-field="edit">Tùy chọn</th>
       </tr>
     </thead>
     <tbody id="bd3">

     </tbody>
</table>
 </div>

 <!-- test4 hoa don -->

 <div id="test4" class="col s12">
   <div class="row">
     <form class="col s12" action="demo.php" method="post">
       <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">assignment</i>
           <input id="icon_prefix" type="text" name ="id_hd" class="validate" required>
           <label for="icon_prefix">Id hóa đơn</label>
         </div>
         <div class="input-field col s6">
           <i class="material-icons prefix">assignment_ind</i>
           <input id="icon_telephone" type="text" name ="id_kh" class="validate" required>
           <label >Id khách hàng</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">date_range</i>
           <input id="datetl" type="date" name ="ntl" class="datepicker" required>
          <label >Ngày thành lập</label>
         </div>
       </div>
       <div align=center>
         <button class='waves-effect waves-light btn' name="hd" type="submit">Thêm</button>
         <button class='waves-effect waves-light btn' >Hủy</button>
       </div>
     </form>
   </div>
   <table class="highlight centered">
     <thead>
       <tr>
         <th data-field="id">Id hóa đơn</th>
         <th data-field="price">Id khách hàng</th>
         <th data-field="name">Ngày lập hóa đơn</th>
         <th data-field="edit">Tùy chọn</th>
       </tr>
     </thead>
     <tbody id="bd4">

     </tbody>
</table>
 </div>

<!-- test5 chi tiet hoa don -->

 <div id="test5" class="col s12">

   <div class="row">
     <form class="col s12" action="demo.php" method="post">
       <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">receipt</i>
           <input id="mcthd1" type="text" name ="id_cthd" class="validate" required>
           <label for="icon_prefix">Id chi tiết hóa đơn</label>
         </div>
         <div class="input-field col s6">
           <i class="material-icons prefix">assignment</i>
           <input id="mhd1" type="text" name ="id_hd" class="validate" required>
           <label for="icon_telephone">Id hóa đơn</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">line_weight</i>
           <input id="msp1" type="text" name ="id_sp" class="validate" required>
           <label for="phone">Id sản phẩm</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">add_shopping_cart</i>
           <input id="slm1" type="number" name="slm" class="validate" required>
           <label for="slm">Số lượng mua</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">monetization_on</i>
           <input id="giaban1" type="text" name="gia_ban" class="validate" required>
           <label for="diachi">Giá bán</label>
         </div>
       </div>
       <div align=center>
         <button class='waves-effect waves-light btn' name="cthd" type="submit">Thêm</button>
         <button class='waves-effect waves-light btn' >Hủy</button>
       </div>

     </form>
   </div>


   <table class="highlight centered">
     <thead>
       <tr>
         <th data-field="id">Id chi tiết hóa đơn</th>
         <th data-field="name">Mã hóa đơn</th>
         <th data-field="price">Mã sản phẩm</th>
         <th data-field="price">Số lượng mua</th>
         <th data-field="price">Giá bán</th>
           <th data-field="edit">Tùy chọn</th>
       </tr>
     </thead>
     <tbody id="bd5">

     </tbody>
</table>
 </div>

</div>
  <script src="js/materialize.min.js"></script>
<?
  include_once("demo.php");

?>
 <!-- kh modal  -->
<div id='modal1' class='modal'>
  <div class='modal-content'>
  <div class='row'>
    <form class='col s12' action='demo.php' method='post'>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="mkh1"  readOnly="true" name ="ma_kh" class="validate" required>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="tkh1" type="text" name ="name" class="validate" required>
        </div>
      </div>
        <div class='input-field col s12'>
          <i class='material-icons prefix'>phone</i>
          <input id='pkh1' type='number' name ='phone' class='validate' required>
        </div>

        <div class='input-field col s12'>
          <i class='material-icons prefix'>place</i>
          <input id='dkh1' type='text' name='diachi' class='validate' required></div>
          <div align=center>
            <button class='waves-effect waves-light btn' name='editkh' type='submit'>Sửa</button>
            <a class='waves-effect waves-light btn'>Hủy</a>
          </div>
    </form>
  </div>
</div>
</div>

 <!-- lsp modal  -->

<div id='modal2' class='modal'>
  <div class='modal-content'>
  <div class='row'>
    <form class='col s12' action='demo.php' method='post'>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="mlsp1"  readOnly="true" name ="ma_lsp" class="validate">
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="tlsp1" type="text" name ="ten_lsp" class="validate">
        </div>
      </div>
          <div align=center>
            <button class='waves-effect waves-light btn' name='editlsp' type='submit'>Sửa</button>
            <a class='waves-effect waves-light btn'>Hủy</a>
          </div>
    </form>
  </div>
</div>
</div>

<!-- sp modal  -->

<div id='modal3' class='modal'>
  <div class='modal-content'>
    <div class="row">
      <form class="col s12" action="demo.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">line_weight</i>
            <input id="msp1" type="text" name ="id_sp" readOnly = "true" class="validate">
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment_late</i>
            <input id="mlsp1_edit" readonly="true" type="text" name ="id_lsp" class="validate">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">style</i>
            <input id="tsp1" type="text" name ="ten_sp" class="validate">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">add_shopping_cart</i>
            <input id="sl1" type="text" name="sl" class="validate">
          </div>
        </div>
        <div align=center>
          <button class='waves-effect waves-light btn' name="editsp" type="submit">Thêm</button>
          <button class='waves-effect waves-light btn' >Hủy</button>
        </div>
      </form>
    </div>
 </div>
</div>

<!-- hd modal  -->

<div id='modal4' class='modal'>
  <div class='modal-content'>
    <div class="row">
      <form class="col s12" action="demo.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment</i>
            <input id="mhd1" readonly="true" type="text" name ="id_hd" class="validate">
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment_ind</i>
            <input id="mkh1_hd" readonly="true" type="text" name ="id_kh" class="validate">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input id="ntl1" type="date" name ="ntl" class="datepicker">
          </div>
        </div>
        <div align=center>
          <button class='waves-effect waves-light btn' name="edithd" type="submit">Sửa</button>
          <button class='waves-effect waves-light btn' >Hủy</button>
        </div>
      </form>
    </div>
 </div>
</div>

<!-- cthd modal  -->

<div id='modal5' class='modal'>
  <div class='modal-content'>
    <div class="row">
      <form class="col s12" action="demo.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">receipt</i>
            <input id="mcthd1" type="text" name ="id_cthd" class="validate">
            <label for="icon_prefix">Id chi tiết hóa đơn</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment</i>
            <input id="mhd1" type="text" name ="id_hd" class="validate">
            <label for="icon_telephone">Id hóa đơn</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">line_weight</i>
            <input id="msp1" type="text" name ="id_sp" class="validate">
            <label for="phone">Id sản phẩm</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">add_shopping_cart</i>
            <input id="slm1" type="number" name="slm" class="validate">
            <label for="slm">Số lượng mua</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">monetization_on</i>
            <input id="giaban1" type="text" name="gia_ban" class="validate">
            <label for="diachi">Giá bán</label>
          </div>
        </div>
        <div align=center>
          <button class='waves-effect waves-light btn' name="cthd" type="submit">Thêm</button>
          <button class='waves-effect waves-light btn' >Hủy</button>
        </div>

      </form>
    </div>
 </div>
</div>

  <script>

            var kh_text = "<?echo $kh_text?>";
            var lsp_text= "<?echo $lsp_text?>";
            var sp_text = "<?echo $sp_text?>";
            var hd_text = "<?echo $hd_text?>";
            var cthd_text = "<?echo $cthd_text?>";

            function addBody(bd_Id, text){
                  var bd= document.getElementById(bd_Id);
                          bd.innerHTML = text;
              }

            //table kh.

              function sub_text_kh(id,ten,sdt,dc) {
                 $('#mkh1').val(id);
                 $('#tkh1').val(ten);
                 $('#pkh1').val(sdt);
                 $('#dkh1').val(dc);
              }

              addBody("bd1",kh_text);

              $(".btn1").click(function() {
                    var text1 = $(this).parents("tr").find('#mkh').text();
                    var text2 = $(this).parents("tr").find('#tkh').text();
                    var text3 = $(this).parents("tr").find('#pkh').text();
                    var text4 = $(this).parents("tr").find('#dkh').text();
                    sub_text_kh(text1,text2,text3,text4);
              });


              //table lsp.

              function sub_text_lsp(id,ten) {
                 $('#mlsp1').val(id);
                 $('#tlsp1').val(ten);
              }
              addBody("bd2",lsp_text);

              $(".btn2").click(function() {
                    var text1 = $(this).parents("tr").find('#mlsp').text();
                    var text2 = $(this).parents("tr").find('#tlsp').text();
                    sub_text_lsp(text1,text2);
              });


              // table sp.

              function sub_text_sp(id,idlsp,tsp,sl) {
                 $('#msp1').val(id);
                 $('#mlsp1_edit').val(idlsp);
                 $('#tsp1').val(tsp);
                 $('#sl1').val(sl);
              }

              addBody("bd3",sp_text);

              $(".btn3").click(function() {
                    var text1 = $(this).parents("tr").find('#msp').text();
                    var text2 = $(this).parents("tr").find('#mlsp_edit').text();
                    var text3 = $(this).parents("tr").find('#tsp').text();
                    var text4 = $(this).parents("tr").find('#sl').text();
                    sub_text_sp(text1,text2,text3,text4);
              });


              // //table hd.

              function sub_text_hd(id,idkh,ntl) {
                 $('#mhd1').val(id);
                 $('#mkh1_hd').val(idkh);
                 $('#ntl1').val(ntl);
              }


              addBody("bd4",hd_text);

              $(".btn4").click(function() {
                    var text1 = $(this).parents("tr").find('#mhd').text();
                    var text2 = $(this).parents("tr").find('#mkh_edit').text();
                    var text3 = $(this).parents("tr").find('#ntl_edit').text();
                    sub_text_hd(text1,text2,text3);
              });
              //table cthd.
              addBody("bd5",cthd_text);

          $('.modal-trigger').leanModal();
          $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});
</script>

</body>
</html>
