$('#destination').hide();
$('#compagnie').hide();
$('#table-tarif').hide();
$('#ok-colis').hide();
$('#ok-destination').hide();
$('#ok-compagnie').hide();

var poidsColis = 0, 
	typeColis = 0, 
	paysDestination = '0', 
	aeroportDestination = '0',
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

$("#input-poids").keyup(function(){
	changeColis();
	afficheTab();
});
$("#input-poids, #select-type").change(function(){
	$("#load-colis").animate({width: "0px"});
	changeColis();
});

function changeColis()
{
	$('#table-tarif').hide();
	$('#ok-colis').hide();
	$('#image-colis').show();
	poidsColisTxt = $('#input-poids').val();
	typeColisTxt = $('#select-type').val();
	ok1 = 0;
	if (poidsColisTxt != '')
	{
		poidsColis = parseInt(poidsColisTxt);
		if (typeColisTxt != '')
		typeColis = parseInt(typeColisTxt);
		if((poidsColis > 0) && (typeColis > 0))
		{
			ok1 = 1;
			$('#ok-colis').fadeIn("slow");
			$("#load-colis").animate({width: "100%"});
			$('#destination').slideDown();
		}
	}
}

$("#select-pays").change(function(){
	paysDestination = $('#select-pays').val();
	aeroportDestination = $('#select-aeroport').val('0');
	var param = {"fonction":"aeroport", "pays": paysDestination};
	$.post('colis.php', param, function(data)
	{
		var aeroport = JSON.parse(data);
		var option = '<option data-tokens="china" value="0">Aéroport</option>';
		for (var i = 0; i < aeroport.length; i++) {
		   option = option + '<option value="'+aeroport[i][0]+'">'+aeroport[i][0]+'</option>';
		}
		$('#select-aeroport').html(option);
		jQuery(document).ready(function($) { $('#select-pays').click(); }); 
	});
});



$("#select-pays, #select-aeroport").change(function(){
	$('#table-tarif').hide();
	$('#ok-destination').hide();
	$("#load-destination").animate({width: "0px"});
	$('#image-colis').show();
	paysDestination = $('#select-pays').val();
	aeroportDestination = $('#select-aeroport').val();

	ok2 = 0;
	if((paysDestination != '0') && (aeroportDestination != '0'))
	{
		ok2 = 1;
		$('#ok-destination').fadeIn("slow");
		$("#load-destination").animate({width: "100%"});
		$('#compagnie').slideDown();
	}
});

$("#select-compagnie").change(function(){
	$('#table-tarif').hide();
	$('#ok-compagnie').hide();
	$("#load-compagnie").animate({width: "0px"});
	$('#image-colis').show();
	compagnieTxt = $('#select-compagnie').val();
	if (compagnieTxt != '')
	compagnie = parseInt(compagnieTxt);
	ok3 = 0;
	if(compagnie > 0)
	{
		$('#ok-compagnie').fadeIn("slow");
		$("#load-compagnie").animate({width: "100%"});
		ok3 = 1;
	}
});




$("#input-poids, #select-type, #select-pays, #select-aeroport, #select-compagnie").change(function(){
	afficheTab();
});


	function afficheTab()
	{
		if(ok1 && ok2 && ok3)
		{
			setTimeout(function()
			{
				$('#table-tarif').slideDown();
				$('#image-colis').hide(); 
			}, 500);

			$('#prix-tx').text(poidsColis * 15);
			$('#prix-scc').text(poidsColis * 75);
			
			var param = {"fonction":"tarif_ht", "compagnie": compagnie};
			$.post('colis.php', param, function(data)
			{
				var totalHt = parseInt(data);
				var totalHtForamat = new Intl.NumberFormat("fr-FR").format(totalHt);
			    $('#prix-ht').text(totalHtForamat);
			});
			var param = {"fonction":"tarif_ttc", "compagnie": compagnie, "poids": poidsColis};
			$.post('colis.php', param, function(data)
			{
				var totalTtc = parseInt(data);
				var totalTtcForamat = new Intl.NumberFormat("fr-FR").format(totalTtc);
			    $('#prix-ttc').text(totalTtcForamat);
			});
		}
	}



$('#btn-effacer').click(function(){
	$('#input-poids').val('');
	$('#select-type').val('0');
	$('#select-pays').removeClass("slect2");
	$('#select-pays').val('0');
	$('#select-pays').select2();
	$('#select-aeroport').val('0');
	$('#select-compagnie').val('0');

	$('#table-tarif').hide();
	$('#image-colis').show();
	
	$('#compagnie').slideUp();
	setTimeout(function()
	{
		$('#destination').slideUp();
	}, 500);
	
	$('#ok-colis').hide();
	$('#ok-destination').hide();
	$('#ok-compagnie').hide();

	$("#load-compagnie").animate({width: "0px"});
	setTimeout(function()
	{
		$("#load-destination").animate({width: "0px"});
	}, 500);
	setTimeout(function()
	{
		$("#load-colis").animate({width: "0px"});
	}, 1000);
	
	ok1 = 0;
	ok2 = 0; 
	ok3 = 0;
});