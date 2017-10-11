<?php 
session_start();
require 'php/timeout.php';
include 'php/anunciante/getBalanceSummary.php';
//include 'php/getTopNotificationsInside.php';
echo $_SESSION["UUID"];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Cleverflow | España</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery.circliful.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
         <script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert.css"/>

    </head>
    <body class="login-bg">

        <div id="wrapper" style="font-size: 14px;">
           <?include 'layout/topA.php';
				?> 
                <div class="row">
                <div class="large-12 columns">
                    <div class="sec-tit" style="margin-bottom: 0;">Resumen</div>
                 </div>
            </div> <!--Row-->
            <div class="row">
                    <div class="not-row full">
                        <div class="large-4 columns">
                            <div class="bf-text">Saldo de cuenta corriente</div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                            <div class="bf-text"><strong> <?echo $balance->{'response_object'}->{'financial_summary'}->{'advertiser_balance'}?> €</strong></div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                            <div class="bf-text"><a href="#">Ver movimientos</a></div>
                        </div><!--colum-->
                     </div>  
            </div> <!--Row-->
			<?if ($balance->{'response_object'}->{'financial_summary'}->{'available_credit'}!=0 || $balance->{'response_object'}->{'financial_summary'}->{'credit_balance'}!=0){
					echo'<div class="row">
                    <div class="not-row full">
                        <div class="large-4 columns">
                            <div class="bf-text">Crédito disponible</div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><strong>'.$balance->{'response_object'}->{'financial_summary'}->{'available_credit'}.' €</strong></div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><a href="#">Solicitar crédito o ampliación</a></div>
                        </div><!--colum-->
                    </div> 
            </div> <!--Row-->
            <div class="row">
                
                    <div class="not-row full">
                        <div class="large-4 columns">
                            <div class="bf-text">Crédito dispuesto</div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><strong>'.$balance->{'response_object'}->{'financial_summary'}->{'credit_balance'}.'€</strong></div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><a href="#">Ver movimientos</a></div>
                        </div><!--colum-->
                    </div> 
            </div> <!--Row-->';
			if($balance->{'response_object'}->{'financial_summary'}->{'available_credit'}==1){
				echo'<div class="row">
                    <div class="not-row full">
                        <div class="large-4 columns">
                            <div class="bf-text">Convenio</div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><strong>Si</strong></div>
                        </div><!--colum-->
                        <div class="large-4 columns">
                             <div class="bf-text"><a href="#">Más información</a></div>
                        </div><!--colum-->
                    </div> 
				</div> <!--Row-->';
				
			}
			}?>
			 
           
        
        

        <div class="row">
            <div class="sec-tit" style="margin-buttom:13px;">Administrar saldo</div>
            <div class="sec-subtit">Incrementar saldo en cuenta corriente <div style="display: inline; font-weight: normal;">mediante:</div>
			<select id="add" class="blue-select">
                    <option value="inc1">Depósito o transferencia bancaria</option>                    
					<option value="inc2">Pago vía Paypal</option>
					<option value="inc3">Disposición de crédito</option>
					<option value="inc4">Redención de código promocional</option>
                </select>
			</div>
        </div> <!--Row-->  
        
        <div class="row" id="addCase">
            <div class="sec-text">Realizar tranferencia a:</div>
            <div class="sec-row mt20">
                <div class="sec-info">Banco</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'bank_name'}?></div>
            </div>
            <div class="sec-row">
                <div class="sec-info">Número de cuenta</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'account_number_1'}?></div>
            </div>
            <div class="sec-row">
                <div class="sec-info">IBAN</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'account_number_2'}?></div>
            </div>
            <div class="sec-row">
                <div class="sec-info">Plaza</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'place'}?></div>
            </div>
            <div class="sec-row">
                <div class="sec-info">Sucursal</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'location'}?></div>
            </div>
            <div class="sec-row">
                <div class="sec-info">Referencia</div>
                <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'reference'}?></div>
            </div>
            <div class="btn-box-right">                                  
                 <button class="btn-four">Descargar datos de pagos</button>           
            </div>
        </div> <!--Row-->  
        
        <div class="row">
			<div class="sec-subtit">Disminuir saldo de cuenta corriente <div style="display: inline; font-weight: normal;">mediante:</div>
			<select id="sub" class="blue-select">
                    <option value="dev1">Devolución a mi cuenta bancaria</option>
                    <option value="dev2">Devolución al crédito</option>
                </select>
			</div>
            
        </div> <!--Row-->
		<div id="decCase">
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<div class="label-full">Importe</div>
					<div class="input-full"><input type="text" placeholder="$0,000.00" class="infull mcero"></div>
				</div>
				<div class="large-6 medium-6 small-12 columns">
					<div class="label-full">IBAN</div>
					<div class="input-full"><input type="text" placeholder="012345678912345678" class="infull mcero"></div>
				</div>
			</div> <!--Row-->  
			
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<div class="label-full">Beneficiario</div>
					<div class="input-full"><input type="text" placeholder="Nombre Completo o Razón Social" class="infull mcero"></div>
				</div>
				<div class="large-6 medium-6 small-12 columns">
					<div class="label-full">Código de seguridad</div>
					<div class="input-full"><input type="text" placeholder="************" class="infull mcero"></div>
				</div>
				
			</div> <!--Row-->
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<div class="label-full">Saldo en cuenta corriente disponible para devolución</div>
					<div class="input-full"> <b>1,000,000 €</b></div>
				</div>
				<div class="btn-box-right last">
					<button class="btn-four">Solicitar Devolución</button>
					<button class="btn-ten">Enviar código por correo</button>
				</div>
			</div> <!--Row-->  
        </div><!--Row DecCase--> 
    </div><!--dash-->
            <?include 'layout/footer.php'?>
            </div><!--Wraper-->
            <div class="load"></div>
            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script src="js/circle.js"></script>
            <script>
                $(document).foundation();
            
            $(function() {
				
				
				inc1Str='<div class="sec-text">Favor de depositar o transferir con la siguiente información:</div>';
				inc1Str+='<div class="sec-row mt20">';
				inc1Str+='<div class="sec-info">Banco</div>';
				inc1Str+='<div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'bank_name'}?></div>';
				inc1Str+='</div>';
				inc1Str+='<div class="sec-row"><div class="sec-info">Número de cuenta</div> <div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'account_number_1'}?></div></div>';
				inc1Str+='<div class="sec-row"> <div class="sec-info">IBAN</div><div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'account_number_2'}?></div></div>';
				inc1Str+='<div class="sec-row"><div class="sec-info">Plaza</div><div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'place'}?></div></div>';
				inc1Str+='<div class="sec-row"><div class="sec-info">Sucursal</div><div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'location'}?></div></div>';
				inc1Str+='<div class="sec-row"><div class="sec-info">Referencia</div><div class="sec-value"><?echo $balance->{'response_object'}->{'payment_summary'}->{'reference'}?></div></div>';
				inc1Str+='<div class="btn-box-right"><button class="btn-four">Incrementar presupuesto</button></div>';
				

		
				inc2Str='<div class="row">';
				inc2Str+=' <div class="label-full">Importe a transferir </div>';
				inc2Str+='<div class="input-full"><input type="text" placeholder="€0,000.00" id="amountP"class="inmid mcero"></div>';
				
				inc2Str+='<div class="btn-box-right">';
					inc2Str+='<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">';
					inc2Str+='<input type="hidden" name="cmd" value="_s-xclick">';
					inc2Str+='<input type="hidden" name="hosted_button_id" value="QQPV99S28D7TC">';
					inc2Str+='<input type="hidden" name="amount" value="'+$('#amountP').val()+'">';
					inc2Str+='<input type="image" src="https://www.sandbox.paypal.com/es_ES/ES/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">';
					inc2Str+='<img alt="" border="0" src="https://www.sandbox.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">';
					inc2Str+='</form>';

					//inc2Str+='<button class="btn-four">Realizar pago</button>   ';
				inc2Str+='</div>';
				inc2Str+='</div><!--row-->';
			
        
				inc3Str='<div class="row">';
				inc3Str+='<div class="sec-row">';
				inc3Str+='<div class="sec-info">Crédito disponible</div>';
				inc3Str+='<div class="sec-value"><?echo $balance->{'response_object'}->{'financial_summary'}->{'available_credit'}?> €</div>';
				inc3Str+='</div>';
				inc3Str+=' <div class="label-full">Importe</div>';
				inc3Str+='<div class="input-full"><input id="amount" type="text" placeholder="€0,000.00" class="inmid mcero"></div>';
				inc3Str+='<div class="btn-box-right">';
				inc3Str+='<button class="btn-four" id="takeCredit">Realizar traspaso</button>';
				inc3Str+='</div>';
				inc3Str+='</div><!--row-->';    
            
        
				inc4Str='<div class="row">';
				inc4Str+='<div class="label-full">Código promocional</div>';
				inc4Str+='<div class="input-full"><input type="text" id="codeNum" placeholder="CLFW50" class="inmid mcero"></div>';
				inc4Str+='<div class="btn-box-right">';
				inc4Str+='<button class="btn-four" id="code">Canjear código</button>';
				inc4Str+=' </div>';
				inc4Str+=' </div><!--row-->';			
				
				
			
				dec1Str='<div class="row">';
				dec1Str+='<div class="large-6 medium-6 small-12 columns">';
				dec1Str+='<div class="label-full">Importe</div>';
				dec1Str+='<div class="input-full"><input type="text" placeholder="$0,000.00" class="infull mcero"></div>';
				dec1Str+='</div>';
				dec1Str+='<div class="large-6 medium-6 small-12 columns">';
				dec1Str+='<div class="label-full">IBAN(18 Dígitos)</div>';
				dec1Str+='<div class="input-full"><input type="text" placeholder="012345678912345678" class="infull mcero"></div>';
				dec1Str+='</div>';
				dec1Str+='</div> <!--Row-->  ';
				dec1Str+='<div class="row">';
				dec1Str+='<div class="large-6 medium-6 small-12 columns">';
				dec1Str+='<div class="label-full">Beneficiario</div>';
				dec1Str+='<div class="input-full"><input type="text" placeholder="Nombre Completo o Razón Social" class="infull mcero"></div>';
				dec1Str+='</div>';
				dec1Str+='<div class="large-6 medium-6 small-12 columns">';
				dec1Str+='<div class="label-full">Código de seguridad</div>';
				dec1Str+='<div class="input-full"><input type="text" placeholder="************" class="infull mcero"></div>';
				dec1Str+='</div>';
				dec1Str+='</div> <!--Row-->  ';
				dec1Str+='</div> <!--Row-->  ';
				dec1Str+='<div class="row">';
				dec1Str+='<div class="large-6 medium-6 small-12 columns">';
				dec1Str+='<div class="label-full">Saldo a cuenta corriente disponible para devolución</div>';
				dec1Str+='<div class="input-full"><b>1,000,000 €</b></div>';
				dec1Str+='</div>';
				dec1Str+='<div class="btn-box-right last">';
				dec1Str+='<button class="btn-four">Solicitar Devolución</button>';
				dec1Str+='<button class="btn-ten">Enviar código por correo</button>';
				dec1Str+='</div>';
				dec1Str+='</div> <!--Row-->  ';
				
				
				
				dec2Str='<div class="row">';
				dec2Str+=' <div class="sec-row">';
				dec2Str+='<div class="sec-info">Saldo en cuenta corriente</div>';
				dec2Str+='<div class="sec-value"><?echo $balance->{'response_object'}->{'financial_summary'}->{'advertiser_balance'}?> €</div>';
				dec2Str+=' </div>';
				dec2Str+='<div class="sec-row">';
				dec2Str+=' <div class="sec-info">Crédito dispuesto</div>';
				dec2Str+=' <div class="sec-value"><?echo $balance->{'response_object'}->{'financial_summary'}->{'credit_balance'}?> €</div>';
				dec2Str+=' </div>';
				dec2Str+='<div class="label-full">Importe a devolver</div>';
				dec2Str+='<div class="input-full"><input id="payAmount"type="text" placeholder="€0,000.00" class="inmid mcero"></div>';
				dec2Str+='<div class="btn-box-right">      ';
				dec2Str+='<button class="btn-four" id="payCredit">solicitar devolución</button>';
				dec2Str+='</div>';
				dec2Str+=' </div><!--row-->';
				
				
			
				
				
                $( "#add" ).change(function() {
					
					switch($( "#add option:selected" ).val()) {
						case "inc1":
							$("#addCase").html(inc1Str);
							break;
						case "inc2":
							$("#addCase").html(inc2Str);
							break;
						case "inc3":
							$("#addCase").html(inc3Str);
							break;
						case "inc4":
							$("#addCase").html(inc4Str);
							break;
						default:
							 $("#addCase").html(inc1Str);
					}
				  });
				
				$( "#sub" ).change(function() {
					
					switch($( "#sub option:selected" ).val()) {
						case "dev1":
							$("#decCase").html(dec1Str);
							break;
						case "dev2":
							$("#decCase").html(dec2Str);
							break;
						default:
							 $("#decCase").html(dec2Str);
					}
				  });
                    
                    
            });
                            
             $(document).on('click', '#code', function(){
					// Redeem Promotional Code (POST http://cleverflowcoreapi.azurewebsites.net/api/advertisers/redeem_promotional_code)

					jQuery.ajax({
						url: "php/anunciante/redeemCode.php",
						type: "POST",
						data: 	{										
									"code": $("#codeNum").val()							
								},
						dataType: "json"
						
					})
					.done(function(data, textStatus, jqXHR) {
						console.log(data);
						if(data["internal_code"]=='0'){
							swal({
							title: '',
							text: '<i>Código Canjeado</i>',
							type: 'success',
							html: true,
							showCancelButton: false,
							confirmButtonColor: '#00C248',
						 },function(){
							 
							});
						   
														  
							}else{
								 swal({
									title: 'Error',
									text: '<i><b>Tu código no pudo ser canjeado verifica que sea correcto.</b></i>',
									type: 'error',
									showCancelButton: false,
									html: true,
									confirmButtonColor: '#DD6B55',
								 });
								 //console.log(data);
									//alert(data["response_object"]['GeneralInformation']['mail_address']);
								
							}
					})
					.fail(function(jqXHR, textStatus, errorThrown) {
						console.log("HTTP Request Failed");
					})
					.always(function() {
						/* ... */
					});

				});
			 
			 $(document).on('click', '#takeCredit', function(){
					// Redeem Promotional Code (POST http://cleverflowcoreapi.azurewebsites.net/api/advertisers/redeem_promotional_code)

					jQuery.ajax({
						url: "php/anunciante/takeFromCredit.php",
						type: "POST",
						data: 	{										
									"amount": $("#amount").val()							
								},
						dataType: "json"
						
					})
					.done(function(data, textStatus, jqXHR) {
						console.log(data);
						if(data["internal_code"]=='0'){
							swal({
							title: 'Crédito tomado',
							text: '<i>Tu aumento fue exitoso</i>',
							type: 'success',
							html: true,
							showCancelButton: false,
							confirmButtonColor: '#00C248',
						 },function(){
							 location.reload();
							});
						   
														  
							}else{
								 swal({
									title: 'Error',
									text: '<i><b>No se pudo retirar del crédito favor de intentar mas tarde.</b></i>',
									type: 'error',
									showCancelButton: false,
									html: true,
									confirmButtonColor: '#DD6B55',
								 });
								 //console.log(data);
									//alert(data["response_object"]['GeneralInformation']['mail_address']);
								
							}
					})
					.fail(function(jqXHR, textStatus, errorThrown) {
						console.log("HTTP Request Failed");
					})
					.always(function() {
						/* ... */
					});

				});
			 
			  $(document).on('click', '#payCredit', function(){
					// Redeem Promotional Code (POST http://cleverflowcoreapi.azurewebsites.net/api/advertisers/redeem_promotional_code)

					jQuery.ajax({
						url: "php/anunciante/payCredit.php",
						type: "POST",
						data: 	{										
									"amount": $("#payAmount").val()							
								},
						dataType: "json"
						
					})
					.done(function(data, textStatus, jqXHR) {
						console.log(data);
						if(data["internal_code"]=='0'){
							swal({
							title: 'Devuelto a crédito',
							text: '<i>Tu aumento fue exitoso</i>',
							type: 'success',
							html: true,
							showCancelButton: false,
							confirmButtonColor: '#00C248',
						 },function(){
							 location.reload();
							});
						   
														  
							}else{
								 swal({
									title: 'Error',
									text: '<i><b>No se pudo devolver el crédito favor de intentar mas tarde.</b></i>',
									type: 'error',
									showCancelButton: false,
									html: true,
									confirmButtonColor: '#DD6B55',
								 });
								 //console.log(data);
									//alert(data["response_object"]['GeneralInformation']['mail_address']);
								
							}
					})
					.fail(function(jqXHR, textStatus, errorThrown) {
						console.log("HTTP Request Failed");
					})
					.always(function() {
						/* ... */
					});

				});
            
            </script>
             <script>
				$body = $("body");
				$(document).on({
                    ajaxStart: function() { $body.addClass("loading");    },
                     ajaxStop: function() { $body.removeClass("loading"); }    
                });
		
		
		</script>
    </body>
</html>
