<?php

$clienteNome = "Moises Pequeno do Rosario";
$clienteEmail = "moiseskm09@gmail.com";
$clienteTel = "(11) 96303-3778";
$clienteCel = "(11) 96303-3778";
$clienteCPF_CNPJ = "38138954833";
$clienteCEP = "07631350";
$clienteEndereco = "Rua Um";
$clienteNumCasa = "435";
$clienteBairro = "Rio Acima";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.asaas.com/api/v3/customers");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"name\": \"$clienteNome\",
  \"email\": \"$clienteEmail\",
  \"phone\": \"$clienteTel\",
  \"mobilePhone\": \"$clienteCel\",
  \"cpfCnpj\": \"$clienteCPF_CNPJ\",
  \"postalCode\": \"$clienteCEP\",
  \"address\": \"$clienteEndereco\",
  \"addressNumber\": \"$clienteNumCasa\",
  \"province\": \"$clienteBairro\",
  \"externalReference\": \"$clienteBairro\",
  \"notificationDisabled\": false
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "access_token: 262b1306652ddc58bdb6cec3ad8117106c8badad0f1106b5d7eb275341cecfb9"
));

$response = curl_exec($ch);
curl_close($ch);

$obj = json_decode($response);
$cli_asaas =  $obj->{'id'};

echo $cli_asaas;