<!-- <div class="example">
  <div id="header">
    <div class="navbar-collapse collapse" id="menu" style="padding-left:0px;">
      <ul class="nav navbar-nav">
        <li class="w3-dropdown-hover" id="logo">
          <a href="#" id="logo">
            <img src="{{asset('img/avery-dennison-logo2.png')}}" alt="AVERY DENNISON" style="height:20px">
          </a>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item1</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item2</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button " id="it">Item3</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item4</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item5</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item6</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item7</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
        <li class="w3-dropdown-hover">
          <a class="w3-button" id="it">Item8</a>
          <ul class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" id="otherItem" class="w3-bar-item w3-button">Link 3</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<style>
  #logo:hover {
    height: 40px;
    width: 60px;
  }

  #logo {
    height: 40px;
    width: 60px;
  }

  #otherItem {
    background: #dddd;
  }

  #it {
    padding: 10px !important;
  }

  .example {
    background: #dddd;
    height: 40px;
  }
</style> -->


<!DOCTYPE html>
<html>

<head>
  <title>Init from object</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="http://cdn.dhtmlx.com/edge/dhtmlx.css" 
    type="text/css"> 
<script src="http://cdn.dhtmlx.com/edge/dhtmlx.js" 
    type="text/javascript"></script>
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
          <li ftype="button" value="submit"></li>
        </ul>
      </li>
    </ul>
  </div>
</body>

</html>