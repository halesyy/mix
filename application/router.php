<?php
  $Sunrise = new Sunrise;
  $header = $Sunrise->mini('static/Header', false, []);
  $footer = $Sunrise->mini('static/Footer', false, []);
  $head   = $Sunrise->mini('static/Head',   false, []);
  $foot   = $Sunrise->mini('static/Foot',   false, []);
  $stack  = ['footer' => $footer, 'header' => $header, 'head' => $head, 'foot' => $foot];

  // Note that this is the static call understander.
  Router::get('/', function($Sunrise){
    global $stack;
    print $Sunrise->mini('Index', false, $stack);
  });
  Router::Get('mix', function($Sunrise){
    global $stack;
    print $Sunrise->mini('Mix', false, $stack);
  });
