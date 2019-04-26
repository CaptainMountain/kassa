<link rel="stylesheet" href="main.css">

<form name="calc" action="" method="POST">

	<div class="image">
	<!--<img src="images/kassa.jpeg" alt="">-->	
	<br><br>
		<div id="changeview">
			<div id="tagname">&nbspПРОГ ФН и ОФД</div>
		</div> 
	<br><br><br><br>
	</div>
	
	<div class="btns">
		<input type="button" name="seven" value="7" OnClick="calc.input.value += '7'">
		<input type="button" name="eight" value="8" OnClick="calc.input.value += '8'">
		<input type="button" name="nine" value="9" OnClick="calc.input.value += '9'">
		<input type="button" name="pv" value="ПВ" style="background: #434755; color: white;">
		<input type="button" name="arrow" value="↑" style="background: #5EABEA; color: white;">
		<input type="button" name="rezh" value="РЕЖ" style="background: #F2FF00;">
		<br>
		<input type="button" name="four" value="4" OnClick="calc.input.value += '4'">
		<input type="button" name="five" value="5" OnClick="calc.input.value += '5'">
		<input type="button" name="six" value="6" OnClick="calc.input.value += '6'">
		<input type="button" name="vz" value="ВЗ"style="background: #434755; color: white;" onclick="removeMess1(this) ">
		<input type="button" name="procent" value="%"style="background: #434755; color: white;">
		<input type="button" name="clear" value="С" style="background: #FF2727; color: white;" OnClick="calc.input.value = ''">
		<br>
		<input type="button" name="one" value="1" OnClick="calc.input.value += '1'">
		<input type="button" name="two" value="2" OnClick="calc.input.value += '2'">
		<input type="button" name="three" value="3" OnClick="calc.input.value += '3'">
		<input type="button" name="add" value="+" style="background: #818790;" onclick="location.href='prog.php'">
		<input type="button" id="minus" name="sub" value="-"style="background: #818790;"onclick="location.href='nefisk-otch.php'">
		<input type="button" name="pi" value="ПИ"style="background: green; color: white;">
		
		<br>
		
		
		
		<input type="button" name="zero" value="0" OnClick="calc.input.value += '0'">
		<input type="button" name="zero" value="00" OnClick="calc.input.value += '00'">
		<input type="button" name="dot" value="." OnClick="calc.input.value += '.'">
		<input type="button" name="mul" value="x"style="background: #818790;" OnClick="calc.input.value += '*'">
		<input type="button" name="kod" value="КОД"style="background: green; color: white;">
		<input type="button" name="it" value="ИТ"style="background: #5EABEA; color: white;">
	</div>
		
	

</form>





<!--
<script>
    function removeMess1(th) {
        document.getElementById('changeview').innerHTML='<div class="screentext">&nbspПРОГРАММИРОВ. БАЗ</div>';
    }

</script>-->
