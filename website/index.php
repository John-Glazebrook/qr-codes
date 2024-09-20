hello world!

<br>

<?php

use chillerlan\QRCode\{QRCode, QROptions};
require_once __DIR__.'/../vendor/autoload.php';

//

$data = 'Hello World!';
// $data = "Mr Glazebrook - code: 1234";
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';

