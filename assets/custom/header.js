$(document).ready(function(){
	$('#tombol').click(function(){
		$('.keteranganmenu').toggleClass("navigasihilang");
		$('.navigasi').toggleClass("navigasikecil");
		$('.content').toggleClass("contentfull");
		$('#hilang').toggleClass("navigasihilang");
	});
});