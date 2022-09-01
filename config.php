<?php
  $form_key;
  if ($_SERVER['HTTP_HOST'] == 'mtx-clinic.jp') {
    $form_key = 11;
    $price_key = 10;
  } elseif ($_SERVER['HTTP_HOST'] == 'stg.roseaupensant.jp') {
    $form_key = 82;
    $price_key = 94;
  } else {
    $form_key = 110;
    $price_key = 62;
  }

