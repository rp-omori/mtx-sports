<?php
  $form_key;
  if ($_SERVER['HTTP_HOST'] == 'mtx-clinic.jp') {
    $form_key = 11;
  } elseif ($_SERVER['HTTP_HOST'] == 'stg.roseaupensant.jp') {
    $form_key = 82;
  } else {
    $form_key = 110;
  }

