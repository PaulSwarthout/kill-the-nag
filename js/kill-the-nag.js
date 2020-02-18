window.addEventListener('load', function () {
	var nag_list = document.getElementsByClassName("update-nag");
	var nag;
	for (var ndx = nag_list.length - 1; ndx >= 0; ndx--) {
		nag = nag_list[ndx];
		nag.parentNode.removeChild(nag);
		nag.remove();
	}
});
