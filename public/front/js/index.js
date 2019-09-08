var howOften = 3;
var current = 1;
var current2 = 1;
function rotater() {
	var pos = (current-1)*((current-1!=0)?$('#acad_slider_'+(current-1)).width():0);
	var pos2 = (current2-1)*((current2-1!=0)?$('#proj_slider_'+(current2-1)).width():0);

	$('#acad_list').animate({marginLeft:(-1)*pos});
	$('#proj_list').animate({marginLeft:(-1)*pos2});

	current = (current==$('#acad_list').attr('count')) ? 1 : current + 1; //increment or reset
	current2 = (current2==$('#proj_list').attr('count')) ? 1 : current2 + 1; //increment or reset

	setTimeout("rotater()",howOften*1000);
}