@extends('client.layout.home') 
@section("content")
<section class="breacrumb">
    <div class="container">
        <div class="breacrumb-w">
            <a href="./" class="homebreadcrumb" title="Trang chủ">Trang chủ</a>
            <a href="./thong-tin-dat-hang.html" title="Thông tin đặt hàng">Thông tin đặt hàng</a>
        </div>
    </div>
</section>
<script>
    function ten(){
        var ht = document.thanhtoan.Name.value;
        var bm = /[^a-z ]$/i;
        if(ht.length==""){
            alert("Bạn chưa nhập tên!");
            return false;
        }
        /*if(bm.test(ht)==true){
            alert("Bạn nhập tên chua đúng!( Tên không có số!)");
            return false;
        }*/
    }
    function email(){
        var mt = document.thanhtoan.Email.value
        var bm = /^.+@.+\..+$/;
        if(mt.length==""){
            alert("Bạn chưa nhập email!")
            return false;
        }
        if(bm.test(mt)==false){
            alert("Bạn nhập email chưa đúng ")
            return false;
        }
        return true;
    }
    function dthoai(){
        var dt = document.thanhtoan.Phone.value;
        var bm = /^0\d{6,11}$/;
        if(dt.length==""){
            alert("Quý khách nhập số điện thoại chưa đúng vui lòng nhập lại số điện thoại chỉ bao gồm các chữ số bắt đầu bằng số 0 và tối đa là 12 ký tự !");
            return false;
        }
        else if(!bm.test(dt)){
            alert("Quý khách nhập số điện thoại chưa đúng vui lòng nhập lại số điện thoại chỉ bao gồm các chữ số bắt đầu bằng số 0 và tối đa là 12 ký tự !");
            document.thanhtoan.Phone.value="";
            return false;
        }
        return true;
    }
    function noidung(){
        var ht = document.thanhtoan.Content.value;
        if(ht.length==""){
            alert("Bạn chưa nhập nội dung");
            return false;
        }
    }
    function diachi(){
        var ht = document.thanhtoan.Address.value;
        if(ht.length==""){
            alert("Bạn chưa nhập địa chỉ");
            return false;
        }
    }		
    function xuly(){
        if(ten()==false) return false;
        if(dthoai()==false) return false;
        if(diachi()==false) return false;
        return true;
    }
    
    
        function clear_contact(){
            document.getElementById("Name").value=""; document.getElementById("Email").value="";
            document.getElementById("Phone").value=""; document.getElementById("Address").value="";
            document.getElementById("Content").value=""; document.getElementById("Content").innerText="";
        }
        function  date_select(time)	{	
            $("#txtDate").hide();
            var date = $("#local").val();					
            if(time == 1) { $("#txtDate").hide(); $("#txtDate").val(date); } 		
            else if(time == 3) { $("#txtDate").val(""); $("#txtDate").fadeIn();}
        }
        function  time_select(time)	{	
            $("#select_time").hide();
            if(time == 1) $("#select_time").val("11:00 AM");
            else if(time == 2) $("#select_time").val("5:00 PM");
            else if(time == 4) $("#select_time").val("12:00 PM");
            else if(time == 3) {$("#select_time").val("");$("#select_time").fadeIn();}
        }
        function payment_select(id){
            if(id==1) $("#payment").val("Thanh toán trực tiếp.");
            else if(id==2) $("#payment").val("Thanh toán qua ngân hàng.");
        }
        function fill_info(){		
            var name = $("#Name").val(); $("#td-name").html(name);
            var email = $("#Email").val(); $("#td-email").html(email);
            var phone = $("#Phone").val(); $("#td-phone").html(phone);
            var address = $("#Address").val(); $("#td-address").html(address);
            var payment_method = $("#payment").val(); $("#td-payment").html(payment_method);
            var delivery = $("#select_time").val(); $("#td-delivery").html(delivery);		
            var demo = $("#txtDate").val(); var res = demo.replace("-","/"); var result = res.replace("-","/"); $("#td-txtDate").html(result);		
            var require = $("#Content").val();	$("#td-require").html(require);	
        }
        
    function showUser(str){
    if (str==""){
        document.getElementById("txtHint").innerHTML="";
        return;
        } 
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
    else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
        }
    xmlhttp.open("GET","./common/checkRandomImage.php?q="+str,true);
    xmlhttp.send();
    }
</script>
<section class="productscate">
    <div class="container">
        <div class="row">		
            <form action="dat-hang-thanh-cong.html " name="thanhtoan" method="post" enctype="multipart/form-data" onsubmit="return xuly()">
                <div class="col-md-6 col-sm-12">
                        <div class="donhang">
                            <div class="donhang_title">Đơn hàng</div>
                            <div class="donhang_bottom">
                            <img class="pull-left product-image" src="products/OXY JAY 5.jpg">
                            <div class="product-info pull-left">
                                <span class="product-info-name">
                                    Máy tạo oxy 5 lít  JAY - 5AW x 1
                                </span>
                            </div>
                            <strong class="product-price pull-right">8.799.000 VNĐ</strong>

                        </div><div class="donhang_bottom">
                            <img class="pull-left product-image" src="products/OXY JAY 3.jpg">
                            <div class="product-info pull-left">
                                <span class="product-info-name">
                                    Máy tạo oxy 3 lít  JAY - 3AW x 1
                                </span>
                            </div>
                            <strong class="product-price pull-right">6.499.000 VNĐ</strong>

                        </div>
                            <div class="clear"></div>
                            <div class="total-line total-line-total">
                                <span class="total-line-name pull-left"> Tổng cộng </span>
                                <span class="total-line-price pull-right">15.298.000 VNĐ</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    
                    <div class="userdangkydonhang col-md-6 col-sm-12">
                            <div>
                                <div class="thanhtoan_title">Quý khách vui lòng nhập đầy đủ thông tin</div>
                                    <div class="form-group">
                                        <input id="Name" name="Name" class="form-control" required="" placeholder="Họ &amp; tên" value="">
                                    </div>
                                    <div class="form-group">
                                        <input id="Phone" name="Phone" required="" class="form-control" placeholder="Điện thoại" value="">
                                        
                                    </div>
                                    <div class="form-group">
                                    <input name="Email" value="" type="email" class="form-control" placeholder="Email">                               
                                </div>
                                <div class="form-group">
                                    <input id="Address" name="Address" class="form-control" placeholder="Địa chỉ" value="">
                                    </div>
                                <div class="form-group">
                                    <textarea id="Content" class="form-control" rows="3" name="Content" placeholder="Ghi chú"></textarea>
                                </div>
                            </div>
                        
                        <script> var mytext = document.getElementById("Name"); mytext.focus(); </script>
                        <div class="submitbuton">	
                            <input type="submit" id="btnxacnhan" class="btntt" value="ĐẶT HÀNG">
                        </div>
                    </div>
                </form>		
        </div>
    </div>
</section>
@endsection