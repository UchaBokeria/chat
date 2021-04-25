<?php
    $arr = array("chat","login");
    $require_icons = "
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    ";
    $require_plugins = "<script src='plugins/emojiPicker/fgEmojiPicker.js'></script>";
    $require_css = "";
    $require_fonts = "";
    $require_js = "";
    
    for ($i = 0; $i < count($arr); $i++) { 
        $require_css .= '<link rel="stylesheet" href="app/' . $arr[$i] . '/' . $arr[$i] . '.css">';
        $require_js .= '<script src="app/' . $arr[$i] . '/' . $arr[$i] . '.js"></script>';
    }