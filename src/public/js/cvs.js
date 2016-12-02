(function() {
	var cvs = document.getElementById('cvs');
	var ctx = cvs.getContext('2d');
	//ctx.fillRect(20,20,300,300);
    ctx.fillStyle = 'rgb(191, 215, 255)';
    ctx.beginPath();
    ctx.arc(100, 75, 50, 0, 2*Math.PI);
    ctx.fill();
    ctx.stroke();
})();
