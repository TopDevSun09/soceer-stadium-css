
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$infoOrganization->organization_name?></title>

    <?php

    define('PATH','includes/mvc-theme/theme-login');

    if( $getMember->member_id == "" ){
        
        echo redirect('maccount-access');
    } 

    ?>
    
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=PATH?>/css/main.css?ver=<?=time()?>">
<!--===============================================================================================-->

    <style>
        .errorLogin {color: yellow;margin: 5px auto 10px auto;font-size: 90%;text-align: center;}
        .inputEditable {
            background: rgb(92,92,92);
            background: linear-gradient(135deg, rgba(92,92,92,1) 35%, rgba(73,73,72,1) 100%);
            color: white;
            border-radius: 4px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        .logo img {
            height: 70px;

        }
        .container-login100 {
            padding-top: 10px;
        }
    </style>

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?=PATH?>/images/bg-01.jpg');" >
            
            <div class="wrap-login100">

                <div class="margin-top: 20px; margin-bottom: 40px; border:1px solid red; ">
                    <div style="float: left;color:white;font-size: 13px;cursor: pointer; " onclick="window.location='mfootball-main'">
                        < Back
                    </div>
                    <div style="float: right; color:white;font-size: 13px;cursor: pointer;" onclick="window.location='logout'">
                        Logout
                    </div>
                    <div style="clear:both"></div>
                </div>
                

                <div class="logo">
                    <img src="/includes/mvc-theme/mobile/<?=$infoOrganization->organization_domain?>/images/brand-logo.png" />
                </div>


                <?php

                if($_POST['btnAction']!=""){

                    if($_POST['member_phone_country']!="" && $_POST['member_phone']!=""){

                        $strPhone = filterPhone($_POST['member_phone_country'].$_POST['member_phone']);

                        if($_POST['member_password']!=""){

                            $extSql .= " , member_password = '".md5($_POST['member_password'])."' ";

                        }

                        tep_query("UPDATE nano_members 
                                    SET 
                                        member_phone = '".$strPhone."' 
                                        {$extSql} 
                                    WHERE member_id = '".tep_input($getMember->member_id)."'");

                        echo redirect($pageURL.'?success=1');

                    }

                }



                ?>
                
                
                    
                    <?php 


                    if($strError!=""){

                        echo "<div class=\"errorLogin\">".$strError."</div>";

                    }

                    if($_GET['success']=="1"){

                        echo "<div class=\"errorLogin\">Account information has been updated.</div>";

                    }


                    $optionCountry = '<option value="65">+65</option>
                                      <option value="60">+60</option>';


                    /*$infoReferral = tep_fetch_object(tep_query("SELECT * FROM nano_members WHERE member_id = '".tep_input($getMember->member_referral)."'"));

                    if($infoReferral->member_id!=""){
                        $strReferral = " (refer by: ".$infoReferral->member_username.")";
                    }*/



                    echo 
                    '
                    
                    <form class="login100-form validate-form" action="'.$pageURL.'" method="POST">

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100 " type="text" name="" placeholder="" value="'.$getMember->member_username.' '.$strReferral.'" disabled >
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 " >
                            <input class="input100 inputEditable" type="password" name="member_password" placeholder="Password" value="">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="">

                                <div style="float:left;margin-right:10px;width:20%;">
                                    <select id="member_phone_country" name="member_phone_country" style="float:left;padding:3px 5px; height:45px;">
                                        '.$optionCountry.'
                                    </select>
                                </div>

                                <div style="float:left;margin-right:5px;width: 72%">
                                    <div class="wrap-input100 validate-input" data-validate = "Enter phone">
                                        <input class="input100 inputEditable" type="number" id="member_phone" name="member_phone" placeholder="Phone" value="'.substr($getMember->member_phone, 2, strlen($getMember->member_phone)-1).'">
                                    </div>
                                </div>
                                                        

                                <div style="clear:both;"></div>

                        </div>


                        <div class="">

                            <div style="float:left;margin-right:20px;width: 76%">
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100 " type="text" name="" placeholder="" value="https://'.$infoOrganization->organization_domain.'?ref='.$getMember->member_id.'" id="inputText" disabled>
                                    <span class="focus-input100" data-placeholder="&#xf170;"></span>
                                </div>

                            </div>

                            <div style="float:left;width:15%">
                                <button type="button" onclick="copyFunction()"  style="float:right; color:white; background: rgb(120,119,116); background: linear-gradient(135deg, rgba(120,119,116,1) 35%, rgba(152,151,146,1) 100%); font-size:14px;line-height:18px; border-radius:2px;height:45px;width:60px;">
                                    Copy
                                </button>
                                
                            </div>                          

                            <div style="clear:both;"></div>

                        </div>

        

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Update
                            </button>
                            <input type="hidden" name="btnAction" value="LOGIN" />
                        </div>

                    </form>

                    

                    ';

                


                    ?>
            </div>

        </div>

    </div>
    




    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?=PATH?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=PATH?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?=PATH?>/js/main.js"></script>

    <script>

        // COPY REFERRAL LINK
        // COPY REFERRAL LINK
        // COPY REFERRAL LINK
        function copyFunction() {

            var copyData = document.getElementById("inputText");
            copyData.select();
            navigator.clipboard.writeText(copyData.value);

        }

    </script>

</body>
</html>


<?php

    tep_close();

?>

