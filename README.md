<h1>PGP_secure-mailer v0.2</h1>
===========================
<small>French translation see below</small>
<h6>Online@ http://user23.net/pgp_secure-mailer/</h6>

 PGP Secure mailer |  Send client-side PGP encypted message to any adress.<br>
 Or use it to be contact from your server with encryption easily, directly in browser, without displaying your email.<br>
 Encryption in browser with <a href='https://github.com/openpgpjs/openpgpjs'>openpgp.js.</a><br>
<br>
<h6>This app can now work with url parameters:</h6><br>
<PRE>http://EXAMPLE.com/?from=YOUR EMAIL@MAIL.COM?message=YOUR MESSAGE YOU CAN USE EMPTY CHARACTER&subject=MESSAGE SUBJECT, WILL BE CLEARTEXT IN FINAL MESSAGE&to=DESTINARY@MAIL.COM&public_key=-----BEGIN PGP PUBLIC KEY BLOCK-----Version: GnuPG v2.0.22 (GNU/Linux)mQINBFQUEk4BEADlTt69kc4PMme(........)9jucEcolm=kE+5-----END PGP PUBLIC KEY BLOCK-----&send_now=NO</PRE>

Example: <pre>http://user23.net/pgp_secure-mailer/?message=Lorem ipsum message&public_key=-----BEGIN PGP PUBLIC KEY BLOCK-----Version: GnuPG v2.0.22 (GNU/Linux)mQINBFQUEk4BEADlTt69kc4PMmeG7RhL5WOIBoz59aR7eBTDEnb1R6c1bMOARTkvYdDFPn3W38oF2XzqQIIOnjoGv/Sb9r7CFv3XTuViN08Z1ph5WDDW1YIFqjqJ5/UfOvpL5CInI4TcnSmRL5R3ZI+QJlTs3b8oeUbgtaZ0WECeP6kWz2D6xvT6eUPoeWx5qzJYNsKSmUZ3hV43IWXEke/EZVx+lEK8gWbr+BxRau2U2Mfl5b83z2m/Q4AE+QSnethfhuSEcZP/qtrj2CVH0ZGAWbOyLYf+NqqJHgjpZSnq2Orr4yTfdKGyeww+gpIvPfual5AS8n3MXlZrECksKdpTkysMAL1da08nXcjNM3aN3iRdmUAd1DQ0uWg4MnBQeYf35QatBgmNvh+PziadabOAdzkGGNwhiD0mDaSBESNWYjJ6uvKTK82c2ViLq574fpf2hJ+uAy6haiNzH4lus5pmSP2DqMmcTvQbxxaQn0IC0hWDVXZPFpvYk2aUVPiDNDoOicwgios9NviCZPfcl9zjR4p3I4jXzkvCj0RO3Zelgt59ikpOFdqQjgpDa3ML2coYxuztPMNoLjIad2z9uGrHmZSXaAEA1i0wzdxhI2lLP0t2qbGDh8tutNY7eELSvba845pwpnUtEkjVNyyVIWs8ODc/Gj8HYDh8uYMVoMYMokoB39vBCX0TMwARAQABtCBOaWNvIEtyYVpodGVzdCA8a3Jhemh0ZXN0QHlhLnJ1PokCOQQTAQIAIwUCVBQSTgIbDwcLCQgHAwIBBhUIAgkKCwQWAgMBAh4BAheAAAoJEB6KhpVzj3jecKQP/2w4Oms4HVNTf1VEdrRoCzowJ1jpcGoxV3wniQUEX3PQMKKyxU0QmZf5nv3XLgy5aM5lkc/mv87Li7fYS2odJHTy0k111T1vuqxkSPy84n1WvsgqPJh0IwE1cynhP08uX0DaXS0lTJPGTj/G8tKKua8tOccVK6O4GYRf+Zh13xaM1raP4Ms60t9cfIQL2LQ1v6LZXkEA1BqnU/z8aCOTpVD9b7IKDz6Jg+g9Gw4CMcFiCa51+Y00jZ2VnHtNoRSFsS/W19UJk2zNzjPuSIsrNtKBfGlxFy5TYj8iU12LX0BpYjMchLx2OVO7tPMF0wKF17yUALyIMJvM4aSUhBNA6xXwau+rth4GD4BRxAyHY40DovEcpqcmpCJlSs8GuSFZRd8rT2ujenQyk4bSo3Jz+g9+sj6wqCUfWOsZ3tVqkfIM2MCVuMkKfAGKvmmms7JD02TGxFE9IgeTVhA12pe/y94OZVnMXp+6ucwrPtMftR8YVj1AUEVTvSyrybHwZunn78FwseELX7wY7DZKh+23nXh1h46zwmzNRR7ZCv7PokDtO4KMTGDUJHhNcJgxyOwEw45uGfNIqFIPvlP//x0YeeOwJsShiVjJ5nM0jgovPmsgRHu+OjJzQGX+hmVLnrVrC+C1PMc3tpwQvl7AyMuMD4GRr184K41H1S/9jucEcolm=kE+5-----END PGP PUBLIC KEY BLOCK-----&from=mefwfwfrewgvagraew@gmail.com&subject=This script rox, thanks&to=contact@webdev23.com&send_now=no</pre>
<br>
<br>
 Generated PGP messages are fully compatible with most or all PGP softwares:<br>
 <ul>
 <li><a href="http://www.kde.org/applications/utilities/kleopatra/">[linux] kleopatra</a>, <br>
 <li><a href="http://www.gpg4win.org">[windows] GPG4win</a><br>
 <li><a href="https://gpgtools.org/">[mac] Gpgtools</a><br>
 <li><a href="https://play.google.com/store/apps/details?id=org.thialfihar.android.apg">[Android] Apg</a> (Some random unknown error)<br>
 <li><a href="https://ipgmail.com/">[ios] Ipgmail</a><br>
 
 [...]
 
 
<h6>Objective for v0.3: </h6>Make possibility to export as html file, with your public key in it. By this way you will get an easy way to be contacted from anywhere with zero config for your friends, only a browser. 
Decent ultralight interface.


<br>
<br>

************************************
<h1>PGP_secure-mailer v0.2</h1>
===========================

<h6>Online@ http://user23.net/pgp_secure-mailer/</h6>

PGP Secure mailer | Envoyer des messages chiffrés en PGP depuis votre navigateur.<br>
Ou utiliser le sur votre serveur pour être contacté directement, depuis un navigateur, sans afficher votre email, en incluant votre clé publique PGP dans le script. <br>
Chiffrement avec <a href='https://github.com/openpgpjs/openpgpjs'>openpgp.js</br>. 
<br>
<h6>Cette application peut maintenant etre controlé par requêtes url:</h6><br>
<PRE>http://EXAMPLE.com/?from=YOUR EMAIL@MAIL.COM?message=YOUR MESSAGE YOU CAN USE EMPTY CHARACTER&subject=MESSAGE SUBJECT, WILL BE CLEARTEXT IN FINAL MESSAGE&to=DESTINARY@MAIL.COM&public_key=-----BEGIN PGP PUBLIC KEY BLOCK-----Version: GnuPG v2.0.22 (GNU/Linux)mQINBFQUEk4BEADlTt69kc4PMme(........)9jucEcolm=kE+5-----END PGP PUBLIC KEY BLOCK-----&send_now=NO</PRE>

Exemple: <pre>http://user23.net/pgp_secure-mailer/?message=Lorem ipsum message&public_key=-----BEGIN PGP PUBLIC KEY BLOCK-----Version: GnuPG v2.0.22 (GNU/Linux)mQINBFQUEk4BEADlTt69kc4PMmeG7RhL5WOIBoz59aR7eBTDEnb1R6c1bMOARTkvYdDFPn3W38oF2XzqQIIOnjoGv/Sb9r7CFv3XTuViN08Z1ph5WDDW1YIFqjqJ5/UfOvpL5CInI4TcnSmRL5R3ZI+QJlTs3b8oeUbgtaZ0WECeP6kWz2D6xvT6eUPoeWx5qzJYNsKSmUZ3hV43IWXEke/EZVx+lEK8gWbr+BxRau2U2Mfl5b83z2m/Q4AE+QSnethfhuSEcZP/qtrj2CVH0ZGAWbOyLYf+NqqJHgjpZSnq2Orr4yTfdKGyeww+gpIvPfual5AS8n3MXlZrECksKdpTkysMAL1da08nXcjNM3aN3iRdmUAd1DQ0uWg4MnBQeYf35QatBgmNvh+PziadabOAdzkGGNwhiD0mDaSBESNWYjJ6uvKTK82c2ViLq574fpf2hJ+uAy6haiNzH4lus5pmSP2DqMmcTvQbxxaQn0IC0hWDVXZPFpvYk2aUVPiDNDoOicwgios9NviCZPfcl9zjR4p3I4jXzkvCj0RO3Zelgt59ikpOFdqQjgpDa3ML2coYxuztPMNoLjIad2z9uGrHmZSXaAEA1i0wzdxhI2lLP0t2qbGDh8tutNY7eELSvba845pwpnUtEkjVNyyVIWs8ODc/Gj8HYDh8uYMVoMYMokoB39vBCX0TMwARAQABtCBOaWNvIEtyYVpodGVzdCA8a3Jhemh0ZXN0QHlhLnJ1PokCOQQTAQIAIwUCVBQSTgIbDwcLCQgHAwIBBhUIAgkKCwQWAgMBAh4BAheAAAoJEB6KhpVzj3jecKQP/2w4Oms4HVNTf1VEdrRoCzowJ1jpcGoxV3wniQUEX3PQMKKyxU0QmZf5nv3XLgy5aM5lkc/mv87Li7fYS2odJHTy0k111T1vuqxkSPy84n1WvsgqPJh0IwE1cynhP08uX0DaXS0lTJPGTj/G8tKKua8tOccVK6O4GYRf+Zh13xaM1raP4Ms60t9cfIQL2LQ1v6LZXkEA1BqnU/z8aCOTpVD9b7IKDz6Jg+g9Gw4CMcFiCa51+Y00jZ2VnHtNoRSFsS/W19UJk2zNzjPuSIsrNtKBfGlxFy5TYj8iU12LX0BpYjMchLx2OVO7tPMF0wKF17yUALyIMJvM4aSUhBNA6xXwau+rth4GD4BRxAyHY40DovEcpqcmpCJlSs8GuSFZRd8rT2ujenQyk4bSo3Jz+g9+sj6wqCUfWOsZ3tVqkfIM2MCVuMkKfAGKvmmms7JD02TGxFE9IgeTVhA12pe/y94OZVnMXp+6ucwrPtMftR8YVj1AUEVTvSyrybHwZunn78FwseELX7wY7DZKh+23nXh1h46zwmzNRR7ZCv7PokDtO4KMTGDUJHhNcJgxyOwEw45uGfNIqFIPvlP//x0YeeOwJsShiVjJ5nM0jgovPmsgRHu+OjJzQGX+hmVLnrVrC+C1PMc3tpwQvl7AyMuMD4GRr184K41H1S/9jucEcolm=kE+5-----END PGP PUBLIC KEY BLOCK-----&from=mefwfwfrewgvagraew@gmail.com&subject=This script rox, thanks&to=contact@webdev23.com&send_now=no</pre>
<br>
<br>
 Les messsages generés sont compatible avec la plupart des programmes PGP:<br>
 <ul>
 <li><a href="http://www.kde.org/applications/utilities/kleopatra/">[linux] kleopatra</a>, <br>
 <li><a href="http://www.gpg4win.org">[windows] GPG4win</a><br>
 <li><a href="https://gpgtools.org/">[mac] Gpgtools</a><br>
 <li><a href="https://play.google.com/store/apps/details?id=org.thialfihar.android.apg">[Android] Apg</a> (Some random unknown error)<br>
 <li><a href="https://ipgmail.com/">[ios] Ipgmail</a><br>
 
 [...]
 





