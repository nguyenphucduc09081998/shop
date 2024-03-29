<!DOCTYPE html>
<html>
<head>
	<title>onButtonClick event</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="stylesheet" type="text/css" href="../../public/lib/codebase/fonts/font_roboto/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="../../public/lib/codebase/dhtmlx.css"/>
	<script src="../../public/lib/codebase/dhtmlx.js"></script>

	<link rel="stylesheet" type="text/css" href="codebase/fonts/font_roboto/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="codebase/dhtmlx.css"/>
	<script src="codebase/dhtmlx.js"></script>
	<style>
		div#simpleLog {
			height: 200px;
			font-family: Roboto, Arial, Helvetica;
			font-size: 14px;
			color: #404040;
			overflow: auto;
		}
	</style>
	<script>
		var myForm, formData, logObj;
		function doOnLoad() {
			formData = [
				{type: "settings", position: "label-left", labelWidth: "auto", inputWidth: "auto"},
				{type: "label", label: "Generate query"},
				{type: "label", list: [
					{type: "settings", offsetLeft: 5},
					{type: "select", label: "SELECT", inputWidth: 100, options:[
						{value: "1", text: "*", selected: true},
						{value: "2", text: "userId"},
						{value: "3", text: "userName"}
					]},
					{type: "newcolumn"},
					{type: "select", label: "FROM", inputWidth: 70, options: [
						{value: "1", text: "users", selected: true}
					]},
					{type: "newcolumn"},
					{type: "select", label: "WHERE", inputWidth: 100, options: [
						{value: "1", text: "userId"},
						{value: "2", text: "userName"}
					]},
					{type: "newcolumn"},
					{type: "select", label: " ", inputWidth: 60, options: [
						{value: "1", text: "LIKE"},
						{value: "2", text: "="},
						{value: "3", text: ">"},
						{value: "4", text: ">="},
						{value: "5", text: "<"},
						{value: "6", text: "<="}
					]},
					{type: "newcolumn"},
					{type: "input", label: " ", inputWidth: 70},
					{type: "newcolumn"},
					{type: "select", label: "ORDER BY", inputWidth: 100, options: [
						{value: "1", text: "userId"},
						{value: "2", text: "userName"}
					]},
					{type: "newcolumn"},
					{type: "select", label: " ", inputWidth: 65, options: [
						{value: "1", text: "ASC"},
						{value: "2", text: "DESC"}
					]}
				]},
				{type: "block", blockOffset: 0, list: [
					{type: "button", value: "Reset", offsetLeft: 280, offsetTop: 20},
					{type: "newcolumn"},
					{type: "button", value: "Submit", offsetTop: 20}
				]}
			];
			myForm = new dhtmlXForm("myForm", formData);
			myForm.attachEvent("onButtonClick", function(name){logEvent("onButtonClick event called, item name '"+name+"'<br>");});
		}
		function logEvent(t,name,command) {
			if (!logObj) logObj = document.getElementById("simpleLog");
			logObj.innerHTML += t;
		}
		function clearLog() {
			if (!logObj) logObj = document.getElementById("simpleLog");
			logObj.innerHTML = "";
		}
	</script>
</head>
<body onload="doOnLoad();">
	<table>
		<tr><td><div id="myForm"></div></td></tr>
		<tr><td><b>Log (<a href="javascript:void(0);" onclick="clearLog();">clear</a>)</b></td></tr>
		<tr><td><div id="simpleLog"></div></td></tr> 
	</table>
</body>
</html>