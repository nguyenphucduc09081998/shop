<!DOCTYPE html>
<html>

<head>
  <title>Init from object</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" type="text/css" href="../../../public/lib/codebase/fonts/font_roboto/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="../../../public/lib/codebase/dhtmlx.css"/>
	<script src="../../../public/lib/codebase/dhtmlx.js"></script>
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

<body>
  <div id="myForm" style="height:500px;">
    <ul class="dhtmlxForm" name="myForm" oninit="doOnFormInit">
      <li ftype="settings" position="label-left" labelWidth="130" inputWidth="120"></li>
      <li ftype="fieldset" name="data" inputWidth="340">
        Welcome
        <ul>
          <li ftype="radio" name="type" labelWidth="auto" position="label-right" checked="true">
            Already have account
            <ul>
              <li ftype="input"  name="test" placeholder="sdfsd">Login</li>
              <!-- <li ftype="password" value="123">Password</li>
              <li ftype="checkbox" checked="true">Remember me</li> -->
            </ul>
          </li>
            <!-- <li ftype="radio" name="type" labelWidth="auto" position="label-right">
              Not registered yet
              <ul>
                <li ftype="input" value="Patricia D. Rossi">Full Name</li>
                <li ftype="input" value="p_rossi@example.com">E-mail Address</li>
                <li ftype="input" value="p_rossi">Login</li>
                <li ftype="password" value="123">Password</li>
                <li ftype="password" value="123">Confirm Password</li>
                <li ftype="checkbox">Subscribe on news</li>
              </ul>
            </li>
            <li ftype="radio" name="type" labelWidth="auto" position="label-right">
              Guest login
              <ul>
                <li ftype="select">
                  Account type
                  <ul>
                    <li ftype="option" value="admin">Admin</li>
                    <li ftype="option" value="org">Organiser</li>
                    <li ftype="option" value="poweruser">Power User</li>
                    <li ftype="option" value="user">User</li>
                  </ul>
                </li>
                <li ftype="checkbox">Show logs window</li>
              </ul>
            </li> -->
          <li ftype="button" value="submit"></li>
        </ul>
      </li>
    </ul>
  </div>
</body>

</html>