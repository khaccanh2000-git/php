<script src="<?php echo URL_LAYOUT; ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/bootstrap.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/jquery.nice-select.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/jquery-ui.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/jquery.slicknav.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/mixitup.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo URL_LAYOUT; ?>js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script >
    	$('a.addCart').click(function(event)){
    		event.preventDefault(); //vô hiệu hóa sự load lại trang
    		var href=$(this).attr("href");
    		$.ajax({
    			url:href,
    			type:'GET',
    			data:{},
    			success:function(res){
    				swal( "Thêm thành công","success"
					);
    			}
    		})
    	}
</script>