<?php
class components_class{
    public static function generarRadios($name,$cantidad){
        for ($i=1; $i <=$cantidad ; $i++) { 
            echo "<input type=\"radio\" name=\"$name\" value=\"$i\">$i ";
        }
    }
    public static function generarTextArea($name){
        echo "<textarea name=\"$name\" cols=\"70\" rows=\"10\"></textarea>";
    }
    public static function generarPregunta($text){
        echo "<label>$text</label>";
    }
}
?>