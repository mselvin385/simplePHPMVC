<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
@return void

  function run()
  {
$arViewData=array();
 $arViewData["nombre"]="orlando J Bentacourt";
 $arViewData["cuenta"]="0801199708935";
 $arViewData["correo"]="mselvin385@gmail.com";

renderizar("ficha",$arViewData);
  }
  run();


?>
