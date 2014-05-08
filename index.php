<html>
<head>
<title>QR Code Generator</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="atas">QR CODE GENERATOR</div>
<div class="small">i code the pixel here...</div><br><br>

<table border="0" align="center">
<tr>
<td><div id="result">
        <iframe name="qrcode-iframe" frameborder="0"  id="qrcode" src="generate.php" height="315px;" width="350px"></iframe>
    </div></td>
<td valign="top"><div id="generator">
        <form target="qrcode-iframe" action="generate.php" method="post">
          <fieldset>
            <legend>Size:</legend>
             <input type="radio" name="size" value="150x150" checked>150x150<br>
             <input type="radio" name="size" value="200x200">200x200<br>
             <input type="radio" name="size" value="250x250">250x250<br>
             <input type="radio" name="size" value="300x300">300x300<br>
          </fieldset>
          <fieldset>
            <legend>Correction:</legend>
            <input type="radio" name="correction" value="L">L - 7% data loss<br>
            <input type="radio" name="correction" value="M">M - 15% data loss<br>
            <input type="radio" name="correction" value="Q">Q - 25% data loss<br>
            <input type="radio" name="correction" value="H">H - 30% data loss<br>
          </fieldset> 
         
          <fieldset>
            <legend>Content:</legend>
            <textarea name="content"></textarea>
          </fieldset>       
      <br><br><br>
          <input type="submit" value="Generate QR Code!" class="button"></input>
        </form>
    </div></td>
</tr>
</table>


<br><br><br><br>
    <div class="footer">
    <a href="asyraf.org">Muhammad Asyraf Wahi Anuar</a>
     </div>


</body>
</html>
