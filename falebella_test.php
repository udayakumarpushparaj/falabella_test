<?php

 $print_value =array("IT", "Linio", "Linianos");
 $result = array();
for ($count = 1; $count <= 100; $count++) {
  if ($count % 3 == 0 || $count % 5 == 0) {
    $result[$count]=($print_value[number_format($count % 3 == 0 && $count % 5 >= 1) + (number_format($count % 3 == 0 && $count % 5 == 0) * 2)]);
    continue;
  }
  $result[$count]=$count;
}
echo '<pre>'; print_r($result);

?>