@extends('client.layout.home') 
@section("content")
<section class="breacrumb">
    <div class="container">
        <div class="breacrumb-w">
            <a href="./" class="homebreadcrumb" title="Trang chủ">Trang chủ</a>
            <a href="./gio-hang.html" title="Chi tiết giỏ hàng">Chi tiết giỏ hàng</a>
        </div>
    </div>
</section>
<script type="text/javascript">
    function updateCart(id, qtt, flag){
        if(flag==true){
            var lnk = "index.php?uc=" + id  + "&qtt=" + document.getElementById(qtt).value;
            window.location.href=lnk;
        }
    }
    function deleteCart(id){
        if(confirm("Bạn có muốn xóa không?")){
            var lnk = "index.php?dc=" + id;
            window.location.href=lnk;
        }
    }
    function IsNumeric(strString){
        var strValidChars = "0123456789";
        var strChar;
        var blnResult = true;
        if (strString.length == 0) return false;
        for (i = 0; i < strString.length && blnResult == true; i++){
          strChar = strString.charAt(i);
          if (strValidChars.indexOf(strChar) == -1) {
                 blnResult = false;
             }
          }
        return blnResult;
    }
    function check(object){
        obj = document.getElementById(object);
        if(!IsNumeric(obj.value)) alert("Số lượng không hợp lệ!");
        else return true;
        return false;
    }
    function valid(){
        if (document.getElementById("Name").value==""){
            alert("Vui lòng cho biết tên !");
            return false;
        }	
        if (document.getElementById("Phone").value==""){
            alert("Vui lòng nhập số điện thoại chính xác để chúng tôi liên hệ lại với quý khách !");
            return false;
        }
        if (!IsNumeric(document.getElementById("Phone").value)){
            alert("Số điện thoại không hợp lệ!");
            return false;
        }
        return true;
    }
</script>

<section class="productscate">
    <div class="container">
        <div class="shopping-title">
                    <div class="label_item col-xs-12 col-sm-1 col-md-1">
                        Sản phẩm
                    </div>
                    <div class="label_item col-xs-12 col-sm-1 col-md-4">
                        Mô tả
                    </div>
                    <div class="label_item col-xs-12 col-sm-1 col-md-2">
                        Số lượng
                    </div>
                    <div class="label_item col-xs-12 col-sm-1 col-md-2">
                        Giá
                    </div>
                    <div class="label_item col-xs-12 col-sm-1 col-md-2">
                        Thành tiền
                    </div>
                    <div class="label_item col-xs-12 col-sm-1 col-md-1">
                        Xóa
                    </div>
                </div><div class="shopping-bottom">
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-1">
                            <div class="cpro_item_m"><img src="products/OXY JAY 5.jpg" width="50" data-alt-src="products/OXY JAY 5.jpg"></div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-4">
                            <div>Máy tạo oxy 5 lít  JAY - 5AW</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m soluong_it"><input id="quantity_471" maxlength="4" class="giohang_1" type="text" value="1"><a class="cpro_item_cn" onclick="updateCart(471,'quantity_471',check('quantity_471'))">Cập nhật</a>
                            
                            </div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m cpro_item_l">8.799.000 VNĐ</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m cpro_item_l">8.799.000 VNĐ</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-1">
                            <div class="cpro_item_m cpro_item_l"><a onclick="deleteCart(471)">Xóa</a></div>
                            
                            
                        </div>
                </div><div class="shopping-bottom">
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-1">
                            <div class="cpro_item_m"><img src="products/OXY JAY 3.jpg" width="50" data-alt-src="products/OXY JAY 3.jpg"></div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-4">
                            <div>Máy tạo oxy 3 lít  JAY - 3AW</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m soluong_it"><input id="quantity_472" maxlength="4" class="giohang_1" type="text" value="1"><a class="cpro_item_cn" onclick="updateCart(472,'quantity_472',check('quantity_472'))">Cập nhật</a>
                            
                            </div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m cpro_item_l">6.499.000 VNĐ</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-2">
                            <div class="cpro_item_m cpro_item_l">6.499.000 VNĐ</div>
                        </div>
                        <div class="cpro_item  col-xs-12 col-sm-1 col-md-1">
                            <div class="cpro_item_m cpro_item_l"><a onclick="deleteCart(472)">Xóa</a></div>
                            
                            
                        </div>
                </div>
                <div class="shop_bttom">
                    <div class="tongtien">Tổng tiền : <font>15.298.000  VNĐ</font></div>
                    <div class="clear"></div>
                    <div class="thanhtoan">
                        <div class="btntt-tt"><a onclick="javascript:history.back()" title="Tiếp tục chọn hàng" class="btntt">Tiếp tục chọn hàng ? </a></div>
                        <div class="tt_r"><a onclick="window.location='thong-tin-dat-hang.html'" title="Thanh toán" class="btntt">Thanh toán</a></div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            
    </div>
</section>
@endsection