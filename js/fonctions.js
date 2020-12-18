$('#destination').hide();
$('#compagnie').hide();
$('#table-tarif').hide();

var poidsColis = 0, 
	typeColis = 0, 
	paysDestination = '0', 
	aeroportDestination = 0,
	compagnie = 0,
	ok1 = 0, ok2 = 0, ok3 = 0;


	var param = {"fonction":"pays"};
	$.post('colis.php', param, function(data)
	{
		var pays = JSON.parse(data);
		for (var i = 0; i < pays.length; i++) {
	        $('#select-pays').append('<option value="'+pays[i][0]+'">'+pays[i][0]+'</option>');
	    }
	    $('#select-pays').select2();
	});

$("#input-poids, #select-type").change(function(){
	$('#table-tarif').hide();
	$('#image-colis').show();
	poidsColisTxt = $('#input-poids').val();
	typeColisTxt = $('#select-type').val();
	if (poidsColisTxt != '')
	poidsColis = parseInt(poidsColisTxt);
	if (typeColisTxt != '')
	typeColis = parseInt(typeColisTxt);
	ok1 = 0;
	if((poidsColis > 0) && (typeColis > 0))
	{
		ok1 = 1;
		$('#destination').slideDown();
	}
});


$("#select-pays").change(function(){
	paysDestination = $('#select-pays').val();
	var param = {"fonction":"aeroport", "pays": paysDestination};
	$.post('colis.php', param, function(data)
	{
		var aeroport = JSON.parse(data);
		var option = "";
		for (var i = 0; i < aeroport.length; i++) {
		   option = option + '<option value="'+aeroport[i][0]+'">'+aeroport[i][0]+'</option>';
		}
		$('#select-aeroport').append(option);
	});
});



$("#select-pays, #select-aeroport").change(function(){
	$('#table-tarif').hide();
	$('#image-colis').show();
	paysDestination = $('#select-pays').val();
	aeroportDestination = $('#select-aeroport').val();

	ok2 = 0;
	if((paysDestination != '0') && (aeroportDestination != '0'))
	{
		ok2 = 1;
		$('#compagnie').slideDown();
	}
});

$("#select-compagnie").change(function(){
	$('#table-tarif').hide();
	$('#image-colis').show();
	compagnieTxt = $('#select-compagnie').val();
	if (compagnieTxt != '')
	compagnie = parseInt(compagnieTxt);
	ok3 = 0;
	if(compagnie > 0)
	{
		ok3 = 1;
	}
});




$("#input-poids, #select-type, #select-pays, #select-aeroport, #select-compagnie").change(function(){
	if(ok1 && ok2 && ok3)
	{
		$('#image-colis').hide();
		$('#prix-tx').text(poidsColis * 15);
		$('#prix-scc').text(poidsColis * 75);
		$('#table-tarif').slideDown();

		var param = {"fonction":"tarif_ht", "compagnie": compagnie};
		$.post('colis.php', param, function(data)
		{
		    $('#prix-ht').text(data);
		});
		var param = {"fonction":"tarif_ttc", "compagnie": compagnie, "poids": poidsColis};
		$.post('colis.php', param, function(data)
		{
		    $('#prix-ttc').text(data);
		});

		
	}



	






});
