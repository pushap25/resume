var howOften = 2;
var current = 1;
function rotater() {
	var pos = (current-1)*((current-1!=0)?$('#acad_slider_'+(current-1)).width():0);
	console.log('#acad_slider_'+current);
	console.log($('#acad_slider_'+current).width());
	console.log(pos);
	// console.log(parseInt($('#acad_list').width()/600));
	$('#acad_list').animate({marginLeft:(-1)*pos});
	current = (current==$('#acad_list').attr('count')) ? 1 : current + 1; //increment or reset
	setTimeout("rotater()",howOften*1000);
}