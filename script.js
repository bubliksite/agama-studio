$(document).ready(function(){
	$("#videoModal").on('hidden.bs.modal', function (e) {
		setTimeout(
			function() {
				location.reload();
			}, 10
		);
	});
});

$(document).ready(function(){
	$("#projectModal").on('hidden.bs.modal', function (e) {
		setTimeout(
			function() {
				location.reload();
			}, 10
		);
	});
});

$(document).ready(function() {
    $("body").children().each(function() {
        $(this).html($(this).html().replace(/&#8232;/g," "));
    });
});