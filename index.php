<!DOCTYPE html><!-- html 5 doctype -->
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>Drop Down Toggle Menu</title>
      <style type="text/css">
      /********************** HORIZONTAL MENU ************************/
      .menu {margin:0 auto; width:960px; height:44px; background:#D1EFF1; position:relative;}
      /*div.menu div.farleft {display:inline; font-size:15px; font-weight:bold; margin:0 19px 0 50px; letter-spacing:-.008em;}*/
      .menu .nav {list-style:none; position:relative; left:0; display:block; float:left; margin:0; padding:0;}
      .menu .nav > li {float:left; display:list-item; margin:1px 19px 0 0;}
      .dropdown {position:relative;}
      .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        *border-right-width: 2px;
        *border-bottom-width: 2px;
        -webkit-border-radius: 6px;
           -moz-border-radius: 6px;
                border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
           -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -webkit-background-clip: padding-box;
           -moz-background-clip: padding;
                background-clip: padding-box;
      }
      
      .open {
        *z-index: 1000;
      }
      
      .open > .dropdown-menu {
        display: block;
      }
      .menu .nav > li > a {color:#006699; text-decoration:none; display:block; float:left; font-size:26px; font-family: 'Yanone Kaffeesatz', sans-serif; font-weight:400;}/* letter-spacing:-.008em; */
      .menu .nav > li > a:hover {color:#60c8d2;}
      .menu .nav > li > a.current {color:#000;}
      .menu .nav > li > a b.caret {display:inline-block; width:0; height:0; border-right:6px solid transparent; border-left:6px solid transparent; border-top:6px solid #006699; margin:0 0 5px 5px;}
      .menu .nav > li > a:hover b.caret {border-top: 6px solid #60c8d2;}
      .menu .nav > li > a.current b.caret {border-top: 6px solid #006699;}
      
      /*************** main body and text div ***************/
      div.body {margin:0 auto; width:960px; overflow:hidden; background:#fff; text-align:left;}
      </style>
    </head>
    <body>
      <div class="menu">
        <ul class="nav">
          <li><a href="#">No Dropdown</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a><!-- data-toggle attribute needs bootstrap.js -->
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        <ul>
      </div>
      <div class="body">
      </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap.js"></script><!-- for toggled dropdown in the menu -->
    </body>
</html>