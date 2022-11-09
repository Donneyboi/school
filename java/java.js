$(document).ready(function () {
	$('.showdash').on('click',function () {
		$('.Dashboardb').show();
		$('.event').hide();
		$('.post').hide();
		$('.aminchat').hide();
		$('.admin').hide();
		$('.forclick').show();
		
	})

		$('.showeve').on('click',function () {
		$('.Dashboardb').hide();
		$('.event').css({"display":"flex"});
		$('.post').hide();
		$('.aminchat').hide();
		$('.admin').hide();
		$('.forclick').show();
	})

			$('.showpost').on('click',function () {
		$('.Dashboardb').hide();
		$('.event').hide();
		$('.post').css({"display":"flex"});
		$('.aminchat').hide();
		$('.admin').hide();
		$('.forclick').show();
	})

		$('.showch').on('click',function () {
		$('.Dashboardb').hide();
		$('.event').hide();
		$('.post').hide();
		$('.aminchat').show();
		$('.admin').hide();
		$('.forclick').show();
	})
})
function showhome() {
	$('.homsec1').hide();
	$('.chat').show();
}
function showchat() {
$('.homsec1').show();
$('.chat').hide();
}