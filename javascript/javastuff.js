$(document).ready(
	function(){
		$("img.a").hover(
			function() {
				$(this).stop().animate({"opacity": "0"}, "1000");
			},
			function() {
				$(this).stop().animate({"opacity": "1"}, "2000");
			});
});