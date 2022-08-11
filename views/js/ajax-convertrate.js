$('document').ready(function() { 
	/* handling Currency Conversion Form validation */
	$("#currency-form").validate({
		rules: {
			amount: {
				required: true,
			},
		},
		messages: {
			amount:{
			  required: ""
			 },			
		},
		submitHandler: handleCurrencyConvert	
	});	   
	/* Handling Currency Convert functionality */
	function handleCurrencyConvertt() {		
		var data = $("#currency-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'convert-rate/convert.php',
			dataType:'json',
			data : data,
			beforeSend: function(){	
				$("#convert").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; converting ...');
			},
			success : function(response){				
				if(response.error == 1){	
					$("#converted_rate").html('<span class="form-group has-error">Error: Please select different currency</span>'); 
					$("#converted_amount").html("");
					$("#convert").html('Convert');
					$("#converted_rate").show();	 
				} else if(response.exhangeRate){									
					$("#converted_rate").html("<strong>Exchange Rate ("+response.toCurrency+"</strong>) : "+response.exhangeRate);
					$("#converted_rate").show();
					$("#converted_amount").html("<strong>Converted Amount (Approx) "+response.toCurrency+"</strong> : "+response.convertedAmount);
					$("#converted_amount").show();
					$("#convert").html('Convert');
				} else {	
					$("#converted_rate").html("No Result");	
					$("#converted_rate").show();	
					$("#converted_amount").html("");
				}
			}
		});
		return false;
	}


function handleCurrencyConvert() {

	var from = $('#from_currency').val();
	var to = $('#to_currency').val();
	var amount = $('#amount').val();

		$.ajax({
    url: "https://api.openrates.io/latest?base="+from+"&symbols="+to,

    crossDomain: true,
 
    // The name of the callback parameter

 
    // Work with the response
    success: function( response ) {
        // console.log( response ); // server response
        
        // $("#converted_rate").html("<strong>Exchange Rate ("+response.toCurrency+"</strong>) : "+response.exhangeRate);
		// $("#converted_rate").show();
		// $("#converted_amount").html("<strong>Converted Amount ("+response.toCurrency+"</strong>) : "+response.convertedAmount);
		$("#converted_amount").html("<strong>Converted Amount (Approx) <span class='converttext'>"+ amount * response.rates[to].toFixed(2)+"</span></strong>");
		$("#converted_amount").show();
		$("#convert").html('Convert');

    }
});

}


});