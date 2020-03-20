<!--inject:js-->
  <script src="/js/libs/jquery.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/bootstrap.bundle.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/ion.rangeSlider.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/is.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/jquery.formstyler.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/jquery.inputmask.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/jquery.waypoints.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/parallax.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <script src="/js/libs/slick.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
  <!--endinject-->
<?php
$d = __DIR__;
$d = dirname($d);
$d .= "/js/";
$f = $d."main.js";
$t = filemtime($f);
print "<script src=\"/js/main.js?v=$t\"></script>";

?>

  <!--[if lt IE 9]>
<p class="browsehappy" style="display:block;position:fixed;top:0;left:0;width:100%;text-align:center;font-size:20px;color:red;background-color:#fff;padding:10px;border-bottom:2px solid black;z-index:9999;">Вы используете <strong style="font-weight:bold;">устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/">обновите ваш браузер</a>!</p>
<![endif]-->
