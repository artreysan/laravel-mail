### Send mails with laravel
Modify file ./config/mail.php with the file .env
This configuration is the MailHog. More info: https://github.com/mailhog/MailHog
```
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=bot@sict.gob.mx
MAIL_FROM_NAME="SICT"
```

Create the mailable
```
php artisan make:mail SolicitudMailable
```
This command created file in ./app/Mail/SolicitudMailable.php

inside liked to file type ./resources/views/emails/respuesta.blade.php how view
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta</title>
</head>
<body>
    <h1>Respuesta de Solicitud</h1>
    <p>Pdf</p>
</body>
</html>
```

in ./routes/web.php add the link
```
Route::get('solicitud', [MailController::class,'sendMail']);
```

create the controller with:
```
php artisan make:controller MailController  
```

in the controller ./app/Http/Controllers/MailController.php we added the follow function 
```
public function sendMail(){
    $correo = new SolicitudMailable;
    Mail::to('rarturo899@gmail.com')->send($correo);
    return "Menasaje enviado";
}
```


