<?php

function strapiGetRequest($locale = 'es') {
    $endpoint = 'https://cms.polariswebsites.com/api/pizzayya-general?' .
      'populate[0]=Slides.Photo' . '&' .
      'populate[1]=Menus' . '&' .
      'populate[2]=Presentations' . '&' .
      'populate[3]=PizzaMenu.Image' . '&' .
      'populate[4]=OrderGuide' . '&' .
      'populate[5]=BuildYourPizzaIngredients' . '&' .
      'populate[6]=ShipmentAreas';

    $endpoint .= '&locale=' . $locale;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);

    return json_decode($response, 1);
}

function strapiGet($locale = 'es') {
  $data = strapiGetRequest($locale);
  
  return $data['data']['attributes'];
}