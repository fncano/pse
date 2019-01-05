<b>web service para pagos PSE - Implementada en Laravel - </b>
<br><br>
Instrucciones

1. Ejecute "composer install".
2. Hacer migracion "php artisan migrate --seed".
3. Cree el archivo .env, y configure los datos, nombre de la base de datos usuario y contraseña.
4. En Base de datos mysql <br> tabla usuarios (user), realizar la inserción de los siguintes datos

<b> INSERT INTO `users` (`id`, `name`, `email`, `password`, `document`, `documentType`, `lastName`, `company`, `address`, `city`, `province`, `country`, `phone`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabio', 'fabio@gmail.com', '$2y$10$xMcAeRr4kg533oox1ST7Ve5fXe2fDToM5kHS6Z3kxv3ERtpzW9mCe', '70856398', 'CC', 'Cano', 'Prueba', 'cll3 73#52-12', 'Medellin', 'Antioquia', 'It', '3728932', '3136716762','null','null','null');<br>
<b>INSERT INTO `users` (`id`, `name`, `email`, `password`, `document`, `documentType`, `lastName`, `company`, `address`, `city`, `province`, `country`, `phone`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Arelys', 'arelys@gmail.com', '$2y$10$Njiu1bxsZ9PNnXLdut1mmOEkmyEzXV9xDPDHUmsd69ZbRqgRsDJue', '22129016', 'CC', 'Larrea', 'Prueba', 'cra 52d#25-80', 'Medellin', 'Antioquia', 'It', '2318932', '3206817026','null','null','null');
5. Ejecute "php artisan serve" he ingrese con cualquiera de los siguientes usuarios.

<b>Usuario 1</b> = fabcan23@gmail.com <br>
<b>Contraseña </b> = 1234 <br>
<br>
<b>Usuario 2</b> = arelys@gmail.com
<b>Contraseña</b> = arel1234
<br><br>
