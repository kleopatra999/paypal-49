<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2> Transaccion </h2>
ID de transaccion: {{$transaction->id}}</br>
Tipo de transaccion: {{$transaction->type}}</br>
Monto: {{$transaction->amount}}</br>
Resultado: {{$transaction->status}}</br>
Creado a: {{$transaction->createdAt->format('Y-m-d H:i:s')}}<br>
Actualizado a: {{$transaction->updatedAt->format('Y-m-d H:i:s')}}<br>

<h2> Pago </h2>
Token: {{$transaction->creditCardDetails->token}}<br>
bin: {{$transaction->creditCardDetails->bin}}<br>
last_4: {{$transaction->creditCardDetails->last4}}<br>
Tipo de tarjeta: {{$transaction->creditCardDetails->cardType}}<br>
Dia de expiracion: {{$transaction->creditCardDetails->expirationDate}}<br>
Cardholder_name: {{$transaction->creditCardDetails->cardholderName}}<br>
Locacion del cliente: {{$transaction->creditCardDetails->customerLocation}}<br>

<h2>Detalle del Cliente</h2>
Detalle del cliente: {{$transaction->customerDetails->id}}<br>
Nombre: {{$transaction->customerDetails->firstName}}<br>
Apellido: {{$transaction->customerDetails->lastName}}<br>
Email: {{$transaction->customerDetails->email}}<br>
Compañia:{{$transaction->customerDetails->company}}<br>
Website: {{$transaction->customerDetails->website}}<br>
Telefono:{{$transaction->customerDetails->phone}}<br>
Fax: {{$transaction->customerDetails->fax}}

</body>
</html>
