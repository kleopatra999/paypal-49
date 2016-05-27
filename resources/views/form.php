<html>
<head>
</head>
<body>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input name="cmd" type="hidden" value="_cart" /> 
<input name="upload" type="hidden" value="1" /> 
<input name="business" type="hidden" value="tucodigodevendedor" />
<input name="shopping_url" type="hidden" value="ladirecciondetuweb" />
<input name="currency_code" type="hidden" value="EUR" />

<input name="return" type="hidden" value="http://mipagina.com/mensaje_compra_exitosa.php" />
<input name="notify_url" type="hidden" value="http://mipagina.com/paypal_ipn.php" />

<input name="rm" type="hidden" value="2" />
#LECHUGAS ; Nombre: Lechugas ; Valor : 15.00 , Cantidad : 2
<input name="item_number_1" type="hidden" value="LECHUGAS2" />
<input name="item_name_1" type="hidden" value="LECHUGAS" /> 
<input name="amount_1" type="hidden" value="15.00" /> 
<input name="quantity_1" type="hidden" value="2" />

#PLÁTANOS ; Nombre: Piruletas ; Valor : 3.00 , Cantidad :15
<input name="item_number_2" type="hidden" value="PLÁTANOS15" />
<input name="item_name_2" type="hidden" value="PLÁTANOS" /> 
<input name="amount_2" type="hidden" value="3.00" /> 
<input name="quantity_2" type="hidden" value="5" /> 
<input type="submit" value="PayPal SandBox" /> 
</form>
</body>
</html>