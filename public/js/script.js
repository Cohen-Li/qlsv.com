$(".delete").click(function (e) { 
	e.preventDefault();
	var dataUrl = $(this).attr("data-url");
	$("#confirmModal a").attr("href",dataUrl)
	$("#confirmModal").modal("show");
});

$("button").click(function(event) {
	/* Act on the event */

	if ($(this).hasClass("active")) {
		//kết thúc hàm, đương nhiên code phía dưới hàm không thực hiện
		return;
	}
	//Remove class active ra khỏi button
	$("button.active").removeClass("active");

	//Add class active cho nút được click
	$(this).addClass('active');

	


});