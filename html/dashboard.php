<?php
session_start();
require 'cleverApi/Influencers.php';



if(!isset( $_SESSION['UUID']))
{
    header('Location: '.'index.html');

}
$clever= new Cleverflow();

$dash= json_decode($clever->getAccountSummary($_SESSION['UUID']));

//echo $_SESSION['UUID'];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Cleverflow | México</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="css/jquery.circliful.css">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/sweetalert.css" />
<script src="js/jquery.circlechart.js" type="text/javascript"></script>
    <style>
.demo {
  max-width: 960px;
  margin: 150px auto;
}

.demo > div {
  float: left;
  margin: 20px;
}
</style>


    </head>
    <body class="login-bg">

      <!--  <div id="wrapper">-->

     <?include 'layout/top.php'; ?>
              <div class="row">
                <div class="dash-bg">
                <div class="medium-12 columns">

                     <div class="w1">
                             <div class="earn-tit">Saldo  $<? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"balance"}); ?> </div>
                             <div class="earn-up">Ganancias recibidas<div class="login-why" data-tooltip="Ganancia total">?</div><span class="login-why"><a href="#">?</a></span><span>$ <? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"total_earnings"}); ?></span></div>
                             <div class="earn-dw">Ganancias pagadas<div class="login-why" data-tooltip="Ganancia total">?</div><span>$ <? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"total_payments"}); ?></span></div>
                             <div class="earn-pd">Ganancias pendientes<div class="login-why" data-tooltip="Ganancia total">?</div><span>$ <? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"total_payments"}); ?></span></div>
                             <div class="earn-nx">Próximo pago: <strong><? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"next_payment_period"}); ?></strong> <span><? print_r ($dash->{"response_object"}->{"FinancialSummary"}->{"selected_payment_method"}); ?></span></div>
                     </div>

                    <div class="w2">
                        <div class="op-tit"><span><? print_r ($dash->{"response_object"}->{"OpportunitiesSummary"}->{"total_opportunities_count"}); ?> Oportunidades<span></div>
                        <div class="op-row tw">Twitter<span><? print_r ($dash->{"response_object"}->{"OpportunitiesSummary"}->{"twitter_opportunities_count"}); ?> </span></div>
                        <div class="op-row fb">Facebook<span><? print_r ($dash->{"response_object"}->{"OpportunitiesSummary"}->{"facebook_opportunities_count"}); ?> </span></div>
                        <div class="op-row ig">Instagram<span><? print_r ($dash->{"response_object"}->{"OpportunitiesSummary"}->{"instagram_opportunities_count"}); ?> </span></div>
                        <div class="op-row ot">Otros<span><? print_r ($dash->{"response_object"}->{"OpportunitiesSummary"}->{"other_opportunities_count"}); ?> </span></div>
                    </div>
                    <div class="w3">
                            <div class="accounts-tit">
                                <span>Mis cuentas</span>
                                <div class="wrap">
                                 <select id="redes" class="select-net">
                                    <option value="">Redes</option>
                                    <option value="1">Twitter</option>
                                    <option value="2">Facebook</option>
                                    <option value="3">Instagram</option>
                                    <option value="4">Otros</option>
                            </select>
                            <select id="cuentas" class="select-usr">
                                <option value="">Cuentas</option>
                            </select>
                            </div>
                            </div>



                    </div>
                    <?php
                    //print_r ($dash->{"response_object"}->{"GeneralStatus"}->{"has_social_networks"});
                    if ($dash->{"response_object"}->{"GeneralStatus"}->{"has_social_networks"}){
                        
                        echo (' <div class="w4">


                               <div class="profile">
                                  <div class="avatar"> <img id="avatar" src="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"profile_picture_url"}.'" alt="avatar"> </div>
                                  <div class="wrap"><div class="usr-name" id="profname">'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"profile_name"}.'</div>
                                  </div>
                               </div>
                            <div class="usr-row">Audiencia directa:  <span id="ad" data-tooltip="Aundiencia directa: ">'. ($dash->{"response_object"}->{"CurrentAccountSummary"}->{"direct_audience"}).'</span></div>
                            <div class="usr-row">Aundiencia directa total:  <span id="adt"  data-tooltip="Aundiencia directa total: ">'.($dash->{"response_object"}->{"CurrentAccountSummary"}->{"real_direct_audience"}).'</span></div>
                            <div class="usr-row">Audiencia expandida esperada:  <span id="aee" data-tooltip="Audiencia expandida esperada es: ">'. ($dash->{"response_object"}->{"CurrentAccountSummary"}->{"expanded_audience"}).'</span></div>
                            <div class="usr-row">Audiencia neta esperada:  <span id="ane" data-tooltip="Audiencia neta esperada es: ">'.($dash->{"response_object"}->{"CurrentAccountSummary"}->{"net_audience"}).'</span></div>

                    </div>


                    <div class="w5">
                            <div class="social-gen">
                                <span>Ganancias por:</span>
                                <input type="number" placeholder="" value ="1" id="cant" class="in50">
                                <select id="action" class="select-four">');
                                    if($dash->{"response_object"}->{"CurrentAccountSummary"}->{"social_network_id"}==1){
                                        echo('<option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_tweet"}.'">Tweet</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_retweet"}.'">Retweet</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_favorite"}.'">Fav</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_reply"}.'">Reply</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_quote"}.'">Quote</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_follow"}.'">Follow</option>');
                                    } else if($dash->{"response_object"}->{"CurrentAccountSummary"}->{"social_network_id"}==2){
                                        echo('<option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_twitter_tweet"}.'">Tweet</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_facebook_post"}.'">Post</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_facebook_comment"}.'">Commnet</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_facebook_like"}.'">Like</option>
                                    <option value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"mult_facebook_share"}.'">Share</option>');
                                   
                                        
                                    }
                                    
                                 echo ('</select>
                                <input type="hidden" id="const" value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"cost_per_action_constant"}.'">
                                <input type="hidden" id="coe" value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"cost_per_action_coefficient"}.'">                             
                                <input type="hidden" id="cost" value="'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"base_cost"}.'">                             
                                <input type="submit" class="btn-three" value="Calcular" id="calcular">
                                <div class="gen-row" id="costOut">$'.$dash->{"response_object"}->{"CurrentAccountSummary"}->{"base_cost"}.' MXN</div>
                            </div>
                            <div class="click-tit">
                                <span>Ganancias por click:</span>
                                <div class="click-cost" id="clickCost">De $'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"cost_per_click_lower_limit"},1)).' MXN a $ '.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"cost_per_click_upper_limit"},1)).' MXN</div>
                                <p>El precio a pagar por clic depende de la oferta realizada por el anunciante al configurar la campaña.</p>
                            </div>
                    </div>
                    <div class="w6">
                       <div class="circle-container first">
                           <div class="wrap" id="cir1">
                           <div id="myStat" data-dimension="125" data-text="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"influence_score"},1)).'" data-info="" data-width="15" data-fontsize="26" data-percent="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"influence_score"},1)).'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>
                            </div>
                           <span class="score">Cleverscore</span>
                       </div>
                        <div class="circle-container">
                            <div class="wrap"  id="cir2">
                           <div id="myStat2" data-dimension="125" data-text="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"impact_score"},1)).'" data-info="" data-width="15" data-fontsize="26" data-percent="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"impact_score"},1)).'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>
                            </div>
                           <span class="score">Score de impacto</span>
                       </div>
                    </div>
                    <div class="w7">
                    <div class="circle-container first">
                            <div class="wrap"  id="cir3">
                           <div id="myStat3" data-dimension="125" data-text="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"audience_score"},1)).'" data-info="" data-width="15" data-fontsize="26" data-percent="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"audience_score"},1)).'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>
                            </div>
                           <span class="score">Score de audiencia</span>
                       </div>
                        <div class="circle-container">
                            <div class="wrap"  id="cir4">
                           <div id="myStat4" data-dimension="125" data-text="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"activity_score"},1)).'" data-info="" data-width="15" data-fontsize="26" data-percent="'.(round($dash->{"response_object"}->{"CurrentAccountSummary"}->{"activity_score"},1)).'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>
                            </div>
                           <span class="score">Score de actividad</span>
                       </div>');
                    }else 
                    ?>
                   
                </div><!--colum-->

               </div><!--dash-BG-->

            </div> <!--Row-->
            
            </div><!--dash-->
             <? include 'layout/footer.php' ?>
     <!--   </div>Wraper-->
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/foundation.tooltip.js"></script>
        <script src="js/circle.js"></script>
        <script>
            $(document).foundation();
            $(document).foundation('tooltip', 'reflow');
        </script>
        <script>
        $( document ).ready(function() {           
                $('#myStat').circliful();
                $('#myStat2').circliful();
                $('#myStat3').circliful();
                $('#myStat4').circliful();
            });
        $('#redes').change(function(e) {
                //Grab the chosen value on first select list change
                var selectvalue = $(this).val();
             
                //Display 'loading' status in the target select list
                $('#cuentas').html('<option value="">Cargando...</option>');
             
                if (selectvalue == "") {
                    //Display initial prompt in target select if blank value selected
                   $('#cuentas').html('<option value="">Cuentas</option>');
                } else {
                  //Make AJAX request, using the selected value as the GET
                  $.ajax({url: 'php/getRedes.php?UUID=<?php echo $_SESSION['UUID']?>&id='+selectvalue,
                         success: function(output) {
                            //alert(output);
                            $('#cuentas').html(output);
                        },
                      error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " "+ thrownError);
                      }});
                    }
                });
         $('#cuentas').change(function(e) {
                //Grab the chosen value on first select list change
                var selectvalue = $(this).val();
             
                //Display 'loading' status in the target select list
               // $('#cuentas').html('<option value="">Cargando...</option>');
             
                if (selectvalue == "") {
                    //Display initial prompt in target select if blank value selected
                   $('#cuentas').html('<option value="">Cuentas</option>');
                } else {
                  //Make AJAX request, using the selected value as the GET
                  $.ajax({url: 'php/getCuenta.php?socialId='+ $('#redes option:selected').val()+'&id='+selectvalue,
                         datatype: 'json',
                         success: function(output) {
                            //alert(output);
                            //$('#cuentas').html(output);
                            var obj= JSON.parse(output);
                            //console.log($("#action option").val());
                           //console.log(obj);
                           if (obj['response_object']['social_network_id']==1) {
                            $("#avatar").attr("src",obj['response_object']['profile_picture_url']);
                            $("#profname").text( obj['response_object']['profile_name']);
                            $("#ad").text( obj['response_object']['direct_audience']);
                            $("#adt").text( obj['response_object']['real_direct_audience']);
                            $("#aee").text( obj['response_object']['expanded_audience']);
                            $("#ane").text( obj['response_object']['net_audience']);
                            //var myOpts = document.getElementById('action').options;
                            //myOpts[0].value=obj['response_object']['mult_twitter_retweet'];
                            //myOpts[1].value=obj['response_object']['mult_twitter_favorite'];
                            //myOpts[2].value=obj['response_object']['mult_twitter_reply'];
                            //myOpts[3].value=obj['response_object']['mult_twitter_quote'];
                            //myOpts[4].value=obj['response_object']['mult_twitter_retweet'];
                            //myOpts[5].value=obj['response_object']['mult_twitter_follow']   ;
                            $("#action").html('<option value="'+obj['response_object']['mult_twitter_tweet']+'">Tweet</option> <option value="'+obj['response_object']['mult_twitter_retweet']+'">Retweet</option> <option value="'+obj['response_object']['mult_twitter_favorite']+'">Fav</option> <option value="'+obj['response_object']['mult_twitter_reply']+'">Reply</option> <option value="'+obj['response_object']['mult_twitter_quote']+'">Quote</option> <option value="'+obj['response_object']['mult_twitter_follow']+'">Follow</option>');
                            $("#con").val( obj['response_object']['cost_per_action_constant']);
                            $("#coe").val( obj['response_object']['cost_per_action_coefficient']);
                            $("#cost").val( obj['response_object']['base_cost']);
                             $("#costOut").text('');
                            $("#costOut").text('$'+obj['response_object']['base_cost']+' MXN');
                            $("#costOut").html('De $'+obj['response_object']['cost_per_click_lower_limit']+' MXN a '+obj['response_object']['cost_per_click_upper_limit']+' MXN');
                            
                            $("#cir1").html('');
                            $("#myStat2").html('');
                            $("#myStat3").html('');
                            $("#myStat4").html('');
                            
                            $("#cir1").html('<div id="myStat" data-dimension="125" data-text="'+(obj['response_object']['influence_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['influence_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir2").html('<div id="myStat2" data-dimension="125" data-text="'+(obj['response_object']['impact_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['impact_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir3").html('<div id="myStat3" data-dimension="125" data-text="'+(obj['response_object']['audience_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['audience_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir4").html('<div id="myStat4" data-dimension="125" data-text="'+(obj['response_object']['activity_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['activity_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');

                           
                            
                            
                            
                            $('#myStat').circliful();
                            $('#myStat2').circliful();
                            $('#myStat3').circliful();
                            $('#myStat4').circliful();
                           } else if (obj['response_object']['social_network_id']==2 ) {
                           $("#avatar").attr("src",obj['response_object']['profile_picture_url']);
                            $("#profname").text( obj['response_object']['profile_name']);
                            $("#ad").text( obj['response_object']['direct_audience']);
                            $("#adt").text( obj['response_object']['real_direct_audience']);
                            $("#aee").text( obj['response_object']['expanded_audience']);
                            $("#ane").text( obj['response_object']['net_audience']);
                            //var myOpts = document.getElementById('action').options;
                            //myOpts[0].value=obj['response_object']['mult_twitter_retweet'];
                            //myOpts[1].value=obj['response_object']['mult_twitter_favorite'];
                            //myOpts[2].value=obj['response_object']['mult_twitter_reply'];
                            //myOpts[3].value=obj['response_object']['mult_twitter_quote'];
                            //myOpts[4].value=obj['response_object']['mult_twitter_retweet'];
                            //myOpts[5].value=obj['response_object']['mult_twitter_follow']   ;
                            $("#action").html('<option value="'+obj['response_object']['mult_facebook_post']+'">Post</option> <option value="'+obj['response_object']['mult_facebook_comment']+'">Comment</option> <option value="'+obj['response_object']['mult_facebook_like']+'">Like</option> <option value="'+obj['response_object']['mult_facebook_share']+'">Share</option> ');
                            $("#con").val( obj['response_object']['cost_per_action_constant']);
                            $("#coe").val( obj['response_object']['cost_per_action_coefficient']);
                            $("#cost").val( obj['response_object']['base_cost']);
                             $("#costOut").text('');
                            $("#costOut").text('$'+obj['response_object']['base_cost']+' MXN');
                            
                             $("#cir1").html('');
                            $("#myStat2").html('');
                            $("#myStat3").html('');
                            $("#myStat4").html('');
                            
                            $("#cir1").html('<div id="myStat" data-dimension="125" data-text="'+(obj['response_object']['influence_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['influence_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir2").html('<div id="myStat2" data-dimension="125" data-text="'+(obj['response_object']['impact_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['impact_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir3").html('<div id="myStat3" data-dimension="125" data-text="'+(obj['response_object']['audience_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['audience_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');
                            $("#cir4").html('<div id="myStat4" data-dimension="125" data-text="'+(obj['response_object']['activity_score']).toFixed(1)+'" data-info="" data-width="15" data-fontsize="26" data-percent="'+obj['response_object']['activity_score']+'" data-fgcolor="#f5a623" data-bgcolor="#eee" data-fill="#fff"></div>');

                             
                            
                            $('#myStat').circliful();
                            $('#myStat2').circliful();
                            $('#myStat3').circliful();
                            $('#myStat4').circliful();
                           }
                            


                           

                            
                        },
                      error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " "+ thrownError);
                      }});
                    }
                });
        $( "#calcular" ).click(function(event) {
            event.preventDefault();
           
            var action = $( "#action option:selected" ).val();
            var cant = $('#cant').val();
            var constante = $('#const').val();
            var coe = $('#coe').val();
            var cost = $('#cost').val();
            var base = action*cost;
           // alert(base);
               $.ajax({
                        url: 'php/getCostAction.php?base='+base+'&cant='+cant+'&const='+constante+'&coe='+coe,
                        success: function(output) {
                            
                            $('#costOut').html('$'+output+' MXN');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + " "+ thrownError);
                        
                        }
                        
                });
        });
                      
        
        </script>

</body>
</html>
