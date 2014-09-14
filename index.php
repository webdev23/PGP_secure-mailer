<!doctype html>
<html>
<head>
<meta charset="utf-8">	
<meta name="description" content="Secure way to send a message, using openPGP encryption. Nothing to configure, here you go." />
<title>PGP Secure mailer | To any adress</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
<!--*************************************************************-->
<!--PGP SECURE MESSAGER V0.1 | Nico made this shit | WTF licence -->
<!--*************************************************************-->
<!--Compatible with all PGP programs | Libs: OpenPGP.js, jquery  -->
<!--*************************************************************-->
<?php
//Here come the recipient email 
$destinataire='change@me.now';
?>
<header id="title">
	<div style="display:inline;min-width:700px">
    <img src="lock.png" style="float:left;" alt="PGP Secure Mailer" title="PGP Secure Mailer" />
		<h1 style="display:inline;min-width:300px">PGP Secure mailer | <span style="font-size:0.6em"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v0.1</small></span></h1><br>
		<p style="display:inline;min-width:300px">Send client-side PGP encypted message to any mail address</p>
		<p style="font-size:0.6em"><a href="https://github.com/webdev23/PGP_secure-mailer">Source on github</a>&nbsp;|&nbsp;<a href="http://user23.net/pgp_secure-mailer/dev.php">Contact dev</a></p>
	</header>	
	<section class="block" style="display:inline;min-width:300px">
		<form action="#" method="post" onsubmit="return encrypt();"
			name="submitform" id="submitform">
<ul>
<br>
<style>
	label{font-size:0.8em;font-decoration:bold}
    form#contact{border:0px solid red;width:70%;padding:1em}
    p#msg,p#adr,p#obj{ solid black;margin-right:10%;padding:10px}
    p#msg textarea{border:2px solid black;align:center;height:90px;width:100%}
    p#adr input,p#obj input{border:2px solid black}
    p.bt{text-align:center}
    p.bt input{border:1px red solid;width:50%}
    textarea{border:1px black dotted;width:50%;max-width:480px}
    input{border:1px black dotted;width:50%;max-width:480px}
</style>
	<li><label>To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input style="max-width:180px" name="destinataire" tabindex="5" size="5" type="text" id="destinataire" value="<?php echo $destinataire; ?>">
 <li><span id='obj'><label for='objet'>Subject: 
<input type='text' name='objet' id='objet' tabindex='10' size='5' value="<?php echo $objet; ?>" style="max-width:180px"><small>&nbsp;(Cleartext!)</small></label>
    						<li><label>Paste here the recipient public PGP key: </label><br>
							<textarea id="public_key">
			
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v2.0.22 (GNU/Linux)

mQENBFQVEVoBCADQdxW67W00QS1zpz8WCJ4IDm/TVv94CWliFxU5NwPFWkozolx2
uhPBfwIZZQ4Fge3KYbqwWskl+bf/CSYFFhxThvGQ3SYOStEI+BG1ZwEJ2Khdkj9v
+2/sTkk6/uLIWE7A/4XHFDq0K/FNyNjEuq1XZPSw3R+VSTUrvDstEG0s8ksvdK4o
4zSMvwOMiB/mnhgNuPqQjduF7tD6n/IgeaLkol4fx8S6kTeRBSry/jtJlEnG4kq1
Z4trYwhHcBT4fjObtsBcyTesnTSvRWwrE+41mFDVsGDkV0CfsdNEn3avjcxxz6Gv
9ZDgYd2Nrqq6bjLjcOs+B9g7sLRS9fOsvUabABEBAAG0GlRlc3Qga2V5IDxrcmF6
aHRlc3RAeWEucnU+iQE5BBMBAgAjBQJUFRFaAhsPBwsJCAcDAgEGFQgCCQoLBBYC
AwECHgECF4AACgkQa9X9eRVJLXu5Zwf7BCwzLDzclaVUsRQBBwfaosrUBEpQTafV
w6/gFw7Kt+XQn5tq6BV2D3AOOIk/xl4fCSeqyWGITZtiViRmHuvmmFd2N10kTx+m
CICc+W5btvFrUoOcjzUtr6S3IvdmEbmdhdsyE1zS8EV9SgSimT56BltCAQoS4a2T
QjKaNy0Y3nebkq2T+DJ5Um3YW16kjigBlsqxQmPThRTGY2QFhq3LlrIhizeYU8Ta
8xo3Bzkj4GwxBcQvRVCEGWSQNaYHzb2UNrdfWxjanjf4eC1J1G2gN+tXymHviSCQ
VseyIpnaJYwlROL8sL+fle+fvJuVS2fpvl2IHMUOP53FT+SyyOjkRQ==
=z/UQ
-----END PGP PUBLIC KEY BLOCK-----
   
   </textarea>
	<li><label>From: <small>(your email for answer)</small> </label><br /> 
		<input name="mail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $mail; ?>">
			<li><label>Message: </label><br /> 
				<textarea tabindex="30" rows="10" cols="40" name="message" id="message"><?php echo $message; ?></textarea>

	</section>
</li>
</ul>
<input name="envoi" tabindex="4" value="Send now" type="submit" style="border:0 30% 0 30%">
</form>
</section>
<!--*************************************************************-->	
<!--PGP SECURE MESSAGER V0.1 | Nico key right here | Replace it! -->
<!--*************************************************************-->	
	<section class="block">
		<p>&nbsp;</p><p>&nbsp;</p>

	<script src="lib/openpgp.min.js"></script>
	<script src="lib/jquery-1.10.1.min.js"></script>
	<script>
		function encrypt() {
			if (window.crypto.getRandomValues) {
				// read public key
				var pub_key = openpgp.key.readArmored($('#public_key').text());
				// encrypt message
				var pgp_message = openpgp.encryptMessage(pub_key.keys, $(
						'#message').val());
				$('#message').val(pgp_message);
				window.alert("Thank you. This message is going to be sent:\n\n"
						+ $('#message').val());
				$("#submitform").attr("action",
						"<?php echo $bas_formulaire;?>");
				return true;
			} else {
				$("#submitbutton").val("browser not supported");
				window
						.alert("Error. Use Chrome >= 11, Safari >= 3.1 or Firefox >= 21");
				return false;
			}
		}
	</script>
<?php
$Previsualiser='<p class="bt">
<input type="submit" name="previsualiser" tabindex="3" value="Pr&eacute;visualiser"></p>';
$Envoi="\n".'<p class="bt">
<input name="envoi" tabindex="4" value="Envoyer" id="mailsend" type="submit"></p>';
if (isset($_POST['message']))
  {
    // Check
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
    // Replace
    $autosendmail='<script></script>document.contact.envoi.click()</script>';
    $message=preg_replace('#(<|>)#', '-', $_POST['message']);
    $message=str_replace('"', "'",$message);
    $message=str_replace('&', 'et',$message);
    $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);
    $objet=str_replace('"', "'",$objet);
    $objet=str_replace('&', 'et',$objet);
    // Assign
    $destinataire=stripslashes(htmlentities($_POST['destinataire']));
    $mail=stripslashes(htmlentities($_POST['mail']));
    $message=stripslashes(htmlspecialchars($message));
    $objet=stripslashes(htmlspecialchars($objet));
    // Input send
    $envoi=htmlentities($_POST['envoi']);
    $previsualiser=htmlentities($_POST['previsualiser']);
    $mail=trim($mail);
    $message=trim($message);
    $objet=trim($objet);
    $apercu_resultat='<p></p>';
    /*Check input*/
    if((empty($message))or(empty($objet))or(!preg_match($verif,$mail)))
      {
        // if all empty
        if(empty($mail)and(empty($message))and(empty($objet)))
          {
            echo '<p>All is empty..no way to encrypt the air.</p>';
            $message='';$mail='';$objet='';$apercu_resultat='';
          }
        // if 1 empty
        else
          {
            if(!preg_match($verif,$mail))
              echo'<p>Invalid mail.</p>';
            else
            {
              echo'<p>Something is missing!</p>';
              if(empty($message))
                $apercu_resultat='';
            }
          }
      }
    // If all fine, send directly
    else
      {
        $domaine=preg_replace('#[^@]+@(.+)#','$1',$mail);
        $DomaineMailExiste=checkdnsrr($domaine,'MX');
        if(!$DomaineMailExiste)
          echo'<p>This mail domain does not exist.</p>';
        elseif(!empty($previsualiser))
            {
              $apercu_resultat='';
              $Previsualiser='';
            }
        elseif(!empty($envoi))  
            {
              $objet='[PGP] : '.$objet;
              $headers='From:'.$mail."\r\n".'To:'.$mail."\r\n".'Subject:'.$objet."\r\n".'Content-type:text/plain;charset=is-8859-1'."\r\n".'Sent:'.date('l, F d, Y H:i');
              if(mail($destinataire,$objet,$message,$headers))
              {
                echo '<p style="position:fixed;top:255px;left:360px;display:inline"><span style="color:green;font-size:210px;text-decoration:bold">&#x2713;</span></p>';
                $Envoi='';
                $Previsualiser='';
              }
              else
                echo'ERROR';
            }
        else
          $autosendmail='';
      }
echo $apercu_resultat;
  }
else
  {
  echo '<p></p>';'<p></p>';
  $mail='';$message='';
  }
$bas_formulaire=$Envoi;
?>
<!-- Hidden form after encrption --> 
<form style="display:none" id='contact' method="post" align="center" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
  <p id='obj'><label for='objet'>Objet du message :<br>
  <input type='text' name='objet' id='objet' tabindex='10' size='30' value="<?php echo $objet; ?>"></label></p> 

  <p id="adr"><label for="mail">E-mail<br>
  <input name="mail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $mail; ?>"></label></p>
  
  <p id="msg"><label for="message">Votre message<br>
  <textarea tabindex="30" rows="10" cols="40" name="message" id="message"><?php echo $message; ?></textarea>
  </label>
<?php echo $bas_formulaire;?>
</form>
</div>	
</div>
</body>
</html>
