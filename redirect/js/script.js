var marginY = 0;
var destination = 0;
var speed;
var scroller = null;

function initscroll(elementId, speed) {
	destination = document.getElementById(elementId).offsetTop - 120;
	scroller = setTimeout(function () {
			initscroll(elementId, speed);
	}, 1);

	marginY = marginY + speed;

	if (marginY >= destination) {
		clearTimeout(scroller);
	}

	window.scroll(0, marginY);
}

function toTop() {
	speed = 15;
	scroller = setTimeout(function () {
		toTop();
	}, 1);

	marginY = marginY - speed;

	if (marginY <= 0) {
		clearTimeout(scroller);
	}
	window.scroll(0, marginY);
}
