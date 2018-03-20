$(document).ready(function(){ 
			
	$(".productPriceWrapRight button").click(function() {															 
		var productIDValSplitter 	= (this.id).split("_");
		
		var productIDVal 			= productIDValSplitter[1];
		var quantityVal 			= $("#txtQuantity_" + productIDVal).val();
		var mauVal 			= $("#txtMau_" + productIDVal).val();
		
		$("#txtQuantity_" + productIDVal).val("").html();
		$("#txtMau_" + productIDVal).val("").html();
		if (quantityVal == 0 || quantityVal == '' || isNaN(quantityVal)) 
		{
		    alert("Vui lòng nhập số lượng cần mua!");
			return false;
		}
		
		var productX 		= $("#productImageWrapID_" + productIDVal).offset().left;
		var productY 		= $("#productImageWrapID_" + productIDVal).offset().top;
		var basketX = 0;
		var basketY = 0;
		
		if( $("#productID_" + productIDVal).length > 0){			
			basketX 		= $("#productID_" + productIDVal).offset().left;
			basketY 		= $("#productID_" + productIDVal).offset().top;			
		} else {			
			basketX 		= $("#basketTitleWrap").offset().left;
			basketY 		= $("#basketTitleWrap").offset().top;
		}		
		var gotoX 			= basketX - productX;
		var gotoY 			= basketY - productY;			
		
		var newImageWidth 	= $("#productImageWrapID_" + productIDVal).width() / 3;
		var newImageHeight	= $("#productImageWrapID_" + productIDVal).height() / 3;
	
		$("#productImageWrapID_" + productIDVal + " img")
		.clone()
		.prependTo("#productImageWrapID_" + productIDVal)
		.css({'position' : 'absolute'})
		.animate({opacity: 0.4}, 100 )
		.animate({opacity: 0.1, marginLeft: gotoX, marginTop: gotoY, width: newImageWidth, height: newImageHeight}, 1200, function() {
																																																																								  			$(this).remove();
	
			$("#notificationsLoader").html('<img src="jBasket/fly-to-basket/images/loader.gif">');
		
			$.ajax({ 
			 
				type: "POST",  
				url: "./common/flycart.php",  
				data: {action: "addToBasket", productID: productIDVal, quantity: quantityVal, mau: mauVal},  
				success: function(theResponse) {
					if( $("#productID_" + productIDVal).length > 0){
						$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
						$("#productID_" + productIDVal).before(theResponse).remove();
						$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
						$("#productID_" + productIDVal).animate({ opacity: 1 }, 500);
						$("#notificationsLoader").empty();
						
					} else {
						$("#basketItemsWrap li:first").before(theResponse);
						$("#basketItemsWrap li:first").hide();
						$("#basketItemsWrap li:first").show("slow");  
						$("#notificationsLoader").empty();			
					}
					$("#basketItemsWrap").html(theResponse);
				
				}  
				
			});  
		$("#notificationsLoader").empty();
		});
				
	});
	
	
	
	$("#basketItemsWrap a img").live("click", function(event) { 
		var productIDValSplitter 	= (this.id).split("_");
		var productIDVal 			= productIDValSplitter[1];	
		$("#notificationsLoader").html('<img src="jBasket/fly-to-basket/images/loader.gif">');
	
		$.ajax({  
			type: "POST",  
			url: "./common/flycart.php",  
			data: { action: "deleteFromBasket", productID: productIDVal },  
			success: function(theResponse) {
				
				//$("#productID_" + productIDVal).hide("slow",  function() {$(this).remove();});
				$("#basketItemsWrap").html(theResponse);	
				$("#notificationsLoader").empty();
			
			}  
		});  
		
	});
});
