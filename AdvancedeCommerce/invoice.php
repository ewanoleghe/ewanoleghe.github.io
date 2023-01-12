<?php
error_reporting(0);

include("conn/config.php");
include("conn/shopping.php");
$number = mt_rand(100000, 999999);
$GuestName = $_SESSION['GuestName'];
?>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Cart | GSI</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
<!--
.style1 {color: #6C6C6C}
-->
</style>
<!-- html2pdf CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"> </script>
  <script type="text/javascript" src="js/invoice/jquery.js"></script>

 <script type="text/javascript" src="1_files/dummy.js"></script>
<script type="text/javascript" src="1_files/jspdf.min.js"></script>
<script id="insert"></script>
<script src="1_files/stringify.js" charset="utf-8"></script>
    <script>
      const customConsole = (w) => {
        const pushToConsole = (payload, type) => {
          w.parent.postMessage({
            console: {
              payload: stringify(payload),
              type:    type
            }
          }, "*")
        }

        w.onerror = (message, url, line, column) => {
          // the line needs to correspond with the editor panel
          // unfortunately this number needs to be altered every time this view is changed
          line = line - 70
          if (line < 0){
            pushToConsole(message, "error")
          } else {
            pushToConsole(`[${line}:${column}] ${message}`, "error")
          }
        }

        let console = (function(systemConsole){
          return {
            log: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "log")
              systemConsole.log.apply(this, args)
            },
            info: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "info")
              systemConsole.info.apply(this, args)
            },
            warn: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "warn")
              systemConsole.warn.apply(this, args)
            },
            error: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "error")
              systemConsole.error.apply(this, args)
            },
            system: function(arg){
              pushToConsole(arg, "system")
            },
            clear: function(){
              systemConsole.clear.apply(this, {})
            },
            time: function(){
              let args = Array.from(arguments)
              systemConsole.time.apply(this, args)
            },
            assert: function(assertion, label){
              if (!assertion){
                pushToConsole(label, "log")
              }

              let args = Array.from(arguments)
              systemConsole.assert.apply(this, args)
            }
          }
        }(window.console))

        window.console = { ...window.console, ...console }

        console.system("Running fiddle")
      }

      if (window.parent){
        customConsole(window)
      }
    </script>
</head>
<body>
<header id="header">
<div class="header-middle">
<div>
<script type="text/javascript" src="scripts/mirage2.min.js"></script>
<img data-cfsrc="images/home/logo.png" alt="" style="display:none;visibility:hidden;" />

</div>
</div><hr>
<div id="pdf">
<table style="width:100%">
  <tr>
    <th width="2%">&nbsp;</th>
    <th width="31%">&nbsp;</th>
    <th width="36%">&nbsp;</th>
    <th width="31%">&nbsp;</th>
  </tr>
  <tr>
  <td></td>
    <td><h3>Bill To:</h3> <?php echo $nCoyN ?><br>
      <?php echo $nFnom .' '.$nMidN .' '. $nLnom ?><br>
      <?php echo $nAdd1  .' '.$nAdd2?><br>
    <?php echo $nZip .' '.$nState  .' '.$nCountry ?></td>
    <td><h3>Ship To:</h3> <?php echo $nCoyN ?><br>
      <?php echo $nFnom .' '.$nMidN .' '. $nLnom ?><br>
      <?php echo $nAdd1  .' '.$nAdd2?><br>
    <?php echo $nZip .' '.$nState  .' '.$nCountry ?></td>
    <td><h3>Invoice</h3>Invoice #: <?php echo $GuestName ?><br>
DOP: <?php echo $rDate ?><br>
P.O. #: GS<?php echo $number ?><br>
Due Date: <?php echo $rDate ?></td>
  </tr>
</table>
<hr />
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">&nbsp;</td>
<td class="description"><strong>Item</strong></td>
<td class="price"><strong>Price</strong></td>
<td class="quantity"><div align="center"><strong>Quantity</strong></div></td>
<td class="total"><strong>Total</strong></td>
</tr>
</thead>
<?php
					$stmt = $pdo->prepare("SELECT * FROM `wallet` WHERE GuestName = :user1 AND quantity > 0 ORDER BY `id` DESC");  
         			$stmt->bindParam('user1', $GuestName);
					$stmt->execute();
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach( $rows as $row ) {
					$item_price = $row["quantity"]*$row["ItemPrice"];
					$gQuant = intval($row['quantity']); 
					$gPrice = intval($row['ItemPrice']);
					//$gTotal = round(($gQuant * $gPrice), 2);
					
	?>
<tbody>
<tr>
<td class="cart_product">&nbsp;</td>
<td class="cart_description">
<h5><?php echo wordwrap($row['rCode'], 25,"<br>\n")?></h5></td>
<td class="cart_price">
<?php echo "$".number_format($row['ItemPrice'],2) ?></td>
<td class="cart_quantity">
  <div align="center"><?php echo $row['quantity']?>  </div></td>
<td class="cart_total">
<?php echo "$".number_format("$item_price",2) ?></td>
    </tr>
		<?php
		$total_quantity += $row["quantity"];
		$total_price += ($row["ItemPrice"]*$row["quantity"]);
// CALCULATE SALES TAX USING Tennessee 9.55%  HIGHEST IN THE NATION
		$nSalesTax = '0.0955';
		$nTax = $nSalesTax*$total_price;
			}
		?>
<tr>
<td colspan="4">&nbsp;</td>
<td colspan="2">
<p></p>

<table class="table table-condensed total-result">
<tr>
<td> Sub Total</td>
<td><?php echo "$".number_format("$total_price",2) ?></td>
</tr>
<tr>
<td>Exo Tax</td>
<td><?php echo "$".number_format("$nTax",2) ?></td>
</tr>
<tr class="shipping-cost">
<td>Shipping Cost</td>
<td><?php $ship = $total_quantity*"1000"; echo "$".number_format("$ship",2) ?></td>
</tr>
<tr>
<td>Total</td>
<td><h4><?php $gTotal = ($total_price+$ship+$nTax); echo "$".number_format("$gTotal",2) ?></h4></td>
</tr>
</table></td>
</tr>
</tbody>
</table>

<table style="width:100%">
  <tr></tr>
  <tr>
    <td><h4 align="center">Contact us for payment instructions </h4>    </td>
  </tr>
</table>
<hr>
<table style="width:100%">
  <tr></tr>
  <tr>
    <td><div align="center" class="style1"><p>Copyright &copy; 2022 GSI - Genjiro Steel Industries Japan Inc. All rights reserved. </p>
	GSI - Genjiro Steel Industries<br>
	5-8, Higashishinagawa 2-Chome<br>
	Shinagawa-Ku, Tokyo, 140-0002</div></td>
  </tr>
</table>
</div>

<button onClick="printDiv('pdf','Title')">print div</button>

<button onClick="saveDiv('pdf','Title')">save div as pdf</button>

    <script type="text/javascript">//<![CDATA[


var doc = new jsPDF();

 function saveDiv(divId, title) {
 doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
 doc.save('div.pdf');
}

function printDiv(divId,
  title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write(`<html><head><title>${title}</title>`);
  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); // necessary for IE >= 10
  mywindow.focus(); // necessary for IE >= 10*/

  mywindow.print();
  mywindow.close();

  return true;
}



  //]]></script>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "z437nxaq"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

    <script>
      let allLines = []

      window.addEventListener("message", (message) => {
        if (message.data.console){
          let insert = document.querySelector("#insert")
          allLines.push(message.data.console.payload)
          insert.innerHTML = allLines.join(";\r")

          let result = eval.call(null, message.data.console.payload)
          if (result !== undefined){
            console.log(result)
          }
        }
      })
    </script>