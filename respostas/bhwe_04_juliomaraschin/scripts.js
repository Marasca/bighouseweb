$(function(){
	var itensInvertidos = false;
	var itensRemovidos = false;
	
	$('.btn-ordenar').on('click', function(){
		var li = $('ul li');
		var div = $('div');
		
		var itens = li.map(function(i, elem) {
			return $(elem).text();
		}).get();
		
		itens.sort();
		div.html('');
		
		for (var i in itens)
			div.append(itens[i] + '<br>');
	});
	
	$('.btn-inverter').hover(function(){
		if (itensInvertidos) {
			alert('O primeiro e o terceiro item já foram invertidos.');
			return false;
		}
		
		var li = $('ul li');
		
		li.eq(0).insertAfter(li.eq(2));
		li.eq(1).insertBefore(li.eq(0));
		
		itensInvertidos = true;
	});
	
	$('.btn-remover').on('dblclick', function(){
		if (itensRemovidos) {
			alert('O segundo e o quinto item já foram removidos.');
			return false;
		}
		
		var li = $('ul li');
		
		li.eq(4).remove();
		li.eq(1).remove();
		
		itensRemovidos = true;
	});
	
	$('.btn-formatar').mouseout(function(){
		$('ul li').addClass('estilo-alternativo');
	});
});