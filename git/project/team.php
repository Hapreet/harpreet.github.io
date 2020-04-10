<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/* entire container, keeps perspective */
.flip-container {
	perspective: 1000px;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 320px;
	height: 480px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	margin-top: 150px;
	height: 250px;
	width: 250px;
	border:1px solid black;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
	margin-top: 150px;
	height: 250px;
	width: 250px;
	border:1px solid black;
}
flip-container:hover .flipper, .flip-container.hover .flipper, .flip-container.flip .flipper {
	transform: rotateY(180deg);
}
	</style>
</head>
<body>
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			heloo
		</div>
		<div class="back">
			bye
		</div>
	</div>
</div>
<script type="text/javascript">
	document.querySelector("#myCard").classList.toggle("flip");
</script>
</body>
</html>