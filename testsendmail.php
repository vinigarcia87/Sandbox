<ul>
<li>Instalar o <a href="http://glob.com.au/sendmail/">fake sendmail</a></li>
<li>Siga <a href="http://www.jacmoe.dk/how-to-send-test-emails-using-php-mail-from-your-local-wamp-installation">essas instruçoes</a></li>
<li>Configure o php.ini da seguinte forma:
<pre>
[mail function]
; For Win32 only.
; http://php.net/smtp
;SMTP = smtp.gmail.com

; http://php.net/smtp-port
;smtp_port = 468

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = vinicius.garcia@storms.com.br

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "C:\wamp\sendmail\sendmail.exe -t"
</pre>
</li>
</ul>
<?php
$to      = 'vinigarcia87@yahoo.com.br';
$subject = 'Fake sendmail test';
$message = 'If we can read this, it means that our fake Sendmail setup works!';
$headers = 'From: vinicius.garcia@storms.com.br' . "\r\n" .
    'Reply-To: vinicius.garcia@storms.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}
