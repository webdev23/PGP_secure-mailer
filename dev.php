<!doctype html>
<html>
<head>
<meta charset="utf-8">	
<meta name="description" content="Secure way to send a message, using openPGP encryption. Nothing to configure, here you go." />
<title>PGP Secure mailer | Hidden recipient</title>
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
$destinataire='krazhtest@ya.ru';
?>
<header id="title">
	<div style="display:inline;min-width:700px">
    <img src="lock.png" style="float:left;" alt="PGP Secure Mailer" title="PGP Secure Mailer" />
		<h1 style="display:inline;min-width:300px">PGP Secure mailer | Contact</h1><br>
		<p style="display:inline;min-width:300px">Send client-side PGP encypted message to a hidden mail address</p>
		<p style="font-size:0.6em"><a href="https://github.com/webdev23/PGP_secure-mailer">Source on github</a>&nbsp;|&nbsp;<a href="http://user23.net/pgp_secure-mailer/">PGP_secure-mailer</a></p>
	</header>	
	<section class="block">
		<form action="#" method="post" onsubmit="return encrypt();"
			name="submitform" id="submitform">
<ul>
<head>
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
<li> <p id='obj'><label for='objet'>Subject : (Cleartext!)<br>
<input type='text' name='objet' id='objet' tabindex='10' size='30' value="<?php echo $objet; ?>"></label>
	<li><label>Your mail (for answer): </label><br /> 
		<input name="mail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $mail; ?>">
			<li><label>Message: </label><br /> 
				<textarea tabindex="30" rows="10" cols="40" name="message" id="message"><?php echo $message; ?></textarea>
</li>
</ul>
<input name="envoi" tabindex="4" value="Envoyer" type="submit">
</form>
</section>
<!--*************************************************************-->	
<!--PGP SECURE MESSAGER V0.1 | Nico key right here | Replace it! -->
<!--*************************************************************-->	
	<section style="display:none"  class="block">
		<p>&nbsp;</p><p>&nbsp;</p>
		<h2>Public key</h2>
		<pre id="public_key">
			
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v2.0.22 (GNU/Linux)

mQINBFQUEk4BEADlTt69kc4PMmeG7RhL5WOIBoz59aR7eBTDEnb1R6c1bMOARTkv
YdDFPn3W38oF2XzqQIIOnjoGv/Sb9r7CFv3XTuViN08Z1ph5WDDW1YIFqjqJ5/Uf
OvpL5CInI4TcnSmRL5R3ZI+QJlTs3b8oeUbgtaZ0WECeP6kWz2D6xvT6eUPoeWx5
qzJYNsKSmUZ3hV43IWXEke/EZVx+lEK8gWbr+BxRau2U2Mfl5b83z2m/Q4AE+QSn
ethfhuSEcZP/qtrj2CVH0ZGAWbOyLYf+NqqJHgjpZSnq2Orr4yTfdKGyeww+gpIv
Pfual5AS8n3MXlZrECksKdpTkysMAL1da08nXcjNM3aN3iRdmUAd1DQ0uWg4MnBQ
eYf35QatBgmNvh+PziadabOAdzkGGNwhiD0mDaSBESNWYjJ6uvKTK82c2ViLq574
fpf2hJ+uAy6haiNzH4lus5pmSP2DqMmcTvQbxxaQn0IC0hWDVXZPFpvYk2aUVPiD
NDoOicwgios9NviCZPfcl9zjR4p3I4jXzkvCj0RO3Zelgt59ikpOFdqQjgpDa3ML
2coYxuztPMNoLjIad2z9uGrHmZSXaAEA1i0wzdxhI2lLP0t2qbGDh8tutNY7eELS
vba845pwpnUtEkjVNyyVIWs8ODc/Gj8HYDh8uYMVoMYMokoB39vBCX0TMwARAQAB
tCBOaWNvIEtyYVpodGVzdCA8a3Jhemh0ZXN0QHlhLnJ1PokCOQQTAQIAIwUCVBQS
TgIbDwcLCQgHAwIBBhUIAgkKCwQWAgMBAh4BAheAAAoJEB6KhpVzj3jecKQP/2w4
Oms4HVNTf1VEdrRoCzowJ1jpcGoxV3wniQUEX3PQMKKyxU0QmZf5nv3XLgy5aM5l
kc/mv87Li7fYS2odJHTy0k111T1vuqxkSPy84n1WvsgqPJh0IwE1cynhP08uX0Da
XS0lTJPGTj/G8tKKua8tOccVK6O4GYRf+Zh13xaM1raP4Ms60t9cfIQL2LQ1v6LZ
XkEA1BqnU/z8aCOTpVD9b7IKDz6Jg+g9Gw4CMcFiCa51+Y00jZ2VnHtNoRSFsS/W
19UJk2zNzjPuSIsrNtKBfGlxFy5TYj8iU12LX0BpYjMchLx2OVO7tPMF0wKF17yU
ALyIMJvM4aSUhBNA6xXwau+rth4GD4BRxAyHY40DovEcpqcmpCJlSs8GuSFZRd8r
T2ujenQyk4bSo3Jz+g9+sj6wqCUfWOsZ3tVqkfIM2MCVuMkKfAGKvmmms7JD02TG
xFE9IgeTVhA12pe/y94OZVnMXp+6ucwrPtMftR8YVj1AUEVTvSyrybHwZunn78Fw
seELX7wY7DZKh+23nXh1h46zwmzNRR7ZCv7PokDtO4KMTGDUJHhNcJgxyOwEw45u
GfNIqFIPvlP//x0YeeOwJsShiVjJ5nM0jgovPmsgRHu+OjJzQGX+hmVLnrVrC+C1
PMc3tpwQvl7AyMuMD4GRr184K41H1S/9jucEcolm
=kE+5
-----END PGP PUBLIC KEY BLOCK-----
   
   </pre>
	</section>
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
              $objet='[SITE] : '.$objet;
              $headers='From:'.$mail."\r\n".'To:'.$mail."\r\n".'Subject:'.$objet."\r\n".'Content-type:text/plain;charset=is-8859-1'."\r\n".'Sent:'.date('l, F d, Y H:i');
              if(mail($destinataire,$objet,$message,$headers))
              {
                echo '<p><span style="color:green;font-size:32px;">&#x2713;</span> Message sent correctly. Cheers.</p>';
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
</body>
</html>
