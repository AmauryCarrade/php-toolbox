<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = html_entity_decode($text);

echo json_encode(array('success' => true,
                       'result' => $text));