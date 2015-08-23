$(document).ready(function(){
	var loai = $("#loai").val();
		if (loai == 0) {
			$("#phanloai").empty();
		};
		if (loai == 1) {
			var sl1 = '<label for="phanloai">Chọn phân loại:</label><br/><select name="phanloai" id="phanloai"><option></option><option value=1>Lớp 1</option><option value=2>Lớp 2 - lớp 5</option><option value=3>Cấp 2</option><option value=4>Cấp 3</option><option value=5>Ôn thi TN - ĐH</option><option value=6>Ngoại ngữ</option><option value=7>Khác</option></select>';
			$("#phanloai").html(sl1);
		};
		if (loai == 2 || loai == 3 || loai == 4 || loai == 5 || loai == 6) {
			var sl2 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Quận Hải Châu</option><option value=2>Quận Thanh Khê</option><option value=3>Quận Liên Chiểu</option><option value=4>Quận Ngũ Hành Sơn</option><option value=5>Quận Sơn Trà</option><option value=6>Quận Cẩm Lệ</option><option value=7>Huyện Hòa Vang</option></select>';
			$("#phanloai").html(sl2);
		};
		if (loai == 7) {
			var sl7 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Truyền thông, Marketing online</option><option value=2>Ngân hàng</option><option value=3>Du lịch</option><option value=4>Viễn thông</option><option value=5>Xây dựng, kiến trúc</option><option value=6>Giáo dục, đào tạo</option><option value=7>Kế toán, kiểm toán</option><option value=8>Nhân viên kinh doanh</option><option value=9>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl7);
		};
		if (loai == 8) {
			var sl8 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Kinh doanh online</option><option value=2>Ngân hàng</option><option value=3>Truyền thông, marketing</option><option value=4>Giáo dục, đào tạo</option><option value=5>Du lịch</option><option value=6>Sim số</option><option value=7>Đánh máy tại nhà</option><option value=8>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl8);
		};
		if (loai == 9) {
			var sl9 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Copywriter</option><option value=2>Đồ họa, thiết kế</option><option value=3>IT và Lập trình</option><option value=4>Kế toán, thuế và pháp lý</option><option value=5>Marketing và bán hàng</option><option value=6>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl9);
		};
		if (loai == 10) {
			var sl10 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Amway</option><option value=2>Sao phương bắc (Oriflame)</option><option value=3>Herbalife</option><option value=4>World nets</option><option value=5>K – link</option><option value=6>Unicity</option><option value=6>Lô hội</option><option value=6>New life</option><option value=6>inalink group</option><option value=6>Công ty khác</option></select>';
			$("#phanloai").html(sl10);
		};

	$("#loai").change(function() {
		var loai = $("#loai").val();
		if (loai == 0) {
			$("#phanloai").empty();
		};
		if (loai == 1) {
			var sl1 = '<label for="phanloai">Chọn phân loại:</label><br/><select name="phanloai" id="phanloai"><option></option><option value=1>Lớp 1</option><option value=2>Lớp 2 - lớp 5</option><option value=3>Cấp 2</option><option value=4>Cấp 3</option><option value=5>Ôn thi TN - ĐH</option><option value=6>Ngoại ngữ</option><option value=7>Khác</option></select>';
			$("#phanloai").html(sl1);
		};
		if (loai == 2 || loai == 3 || loai == 4 || loai == 5 || loai == 6) {
			var sl2 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Quận Hải Châu</option><option value=2>Quận Thanh Khê</option><option value=3>Quận Liên Chiểu</option><option value=4>Quận Ngũ Hành Sơn</option><option value=5>Quận Sơn Trà</option><option value=6>Quận Cẩm Lệ</option><option value=7>Huyện Hòa Vang</option></select>';
			$("#phanloai").html(sl2);
		};
		if (loai == 7) {
			var sl7 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Truyền thông, Marketing online</option><option value=2>Ngân hàng</option><option value=3>Du lịch</option><option value=4>Viễn thông</option><option value=5>Xây dựng, kiến trúc</option><option value=6>Giáo dục, đào tạo</option><option value=7>Kế toán, kiểm toán</option><option value=8>Nhân viên kinh doanh</option><option value=9>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl7);
		};
		if (loai == 8) {
			var sl8 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Kinh doanh online</option><option value=2>Ngân hàng</option><option value=3>Truyền thông, marketing</option><option value=4>Giáo dục, đào tạo</option><option value=5>Du lịch</option><option value=6>Sim số</option><option value=7>Đánh máy tại nhà</option><option value=8>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl8);
		};
		if (loai == 9) {
			var sl9 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Copywriter</option><option value=2>Đồ họa, thiết kế</option><option value=3>IT và Lập trình</option><option value=4>Kế toán, thuế và pháp lý</option><option value=5>Marketing và bán hàng</option><option value=6>Ngành nghề khác</option></select>';
			$("#phanloai").html(sl9);
		};
		if (loai == 10) {
			var sl10 = '<label>Chọn phân loại:</label><br/><select name="phanloai"><option></option><option value=1>Amway</option><option value=2>Sao phương bắc (Oriflame)</option><option value=3>Herbalife</option><option value=4>World nets</option><option value=5>K – link</option><option value=6>Unicity</option><option value=6>Lô hội</option><option value=6>New life</option><option value=6>inalink group</option><option value=6>Công ty khác</option></select>';
			$("#phanloai").html(sl10);
		};
	});

	$(".deleteuser").click(function(){
		var del = confirm("Bạn thật sự muốn xóa tài khoản này?");
		if (del == false) {
			event.preventDefault();
		};
	});

})