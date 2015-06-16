function getJSONDate() {
	$.ajax({
		type: "GET",
		url: "http://192.168.182.1:3990/json/status",
		dataType: "jsonp",
		success: function (json) {
			$("#tb_json").val(JSON.stringify(json));
		},
		error: function (data) {
			$("#tb_json").val("error");
		}
	});
}

var link_blink = function (id) {
	hide_link($("#" + id));
};
var hide_link = function (link) {
	link.animate({ opacity: 0.15 }, 1500, function () { show_white($(this)); });
};
var show_white = function (link) {
	link.animate({ opacity: 1 }, 1500, function () { hide_link($(this)); });
};
