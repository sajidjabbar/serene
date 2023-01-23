// /**** Profile Js Start Here *****\  \\
$(".edit_profile").click(function () {
	$(".complete_profile_section").addClass("hide");
	$(".update_profile").removeClass("hide");
});
$(".Change_Your_Address").click(function () {
	$(".complete_profile_section").addClass("hide");
	$(".change_address").parent().removeClass("hide");
});
$(".change_password_now").click(function () {
	$(".complete_profile_section").addClass("hide");
	$(".change_password").parent().removeClass("hide");
});
$(".view_order_detail").click(function () {
	$(".order_table_start").addClass("hide");
	$(".order_detail_page").removeClass("hide");
});
$(".back_btn").click(function () {
	$(".order_detail_page").addClass("hide");
	$(".order_table_start").removeClass("hide");
});
// Pre Loader Js
$(window).on("load", function () {
	// console.log("test");
	$("#preloader").fadeOut(1000);
});
// Pre Loader Js

// Mobile Header Js
$("header .canvas_btn").click(function () {
	$(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
	$(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Quantity Counter Start Here
var value = 0;
$("#quantityCounter").val(value);
$("#Increment").on("click", function () {
	value = parseInt(value + 1);
	$("#quantityCounter").val(value);
});
$("#Decrement").on("click", function () {
	if (value > 0) {
		value = parseInt(value - 1);
		$("#quantityCounter").val(value);
	} else {
		value = 0;
		$("#quantityCounter").val(value);
	}
});
// Quantity Counter End Here

// Banner Video Js
myVideo = document.getElementById("myvid");
function playPause() {
	if (myVideo.paused) {
		myVideo.play();
	} else {
		myVideo.pause();
	}
}
// Banner Video Js

// Product Detail Video Js
const video = document.getElementById("Provideo");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});
// Product Detail Video Js
