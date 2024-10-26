
<script language="javascript" type="text/javascript">
function onlyalphabets(e, t){
	try{
		if(window.event){
			var charcode=window.event.keycode;
		}
		else if (e){
			var charcode=e.which;
		}
		else{return true;}
		if((charcode >64 && charcode<91)||(charcode>96 && charcode<123))
		return true;
		else
		return false;
		else 
		return false;
	}
	catch (err){
		alert(err. desscription);
	}
}
</script>



<script type="text/javascript">
var specialkeys=new array();
specialkeys.push(8);
function Isnumeric(e){
	var keycoden=e.which? e.which: e.keycode
	var ret=((keycode>=48 && keycode<=57)||specialkeys.indexof(keycode)!= -1);
	document.getElementById("error").style.display=ret?"none":"inline";
	return ret;
}
</script>