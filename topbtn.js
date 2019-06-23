window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 5) {
		document.getElementById("upbtn").style.display = "block";
	} else {
		document.getElementById("upbtn").style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}