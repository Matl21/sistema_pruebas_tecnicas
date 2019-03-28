<?php
class Components{
    public static function generarRadios($name,$cantidad){
        for ($i=1; $i <=$cantidad ; $i++) { 
            echo "<label class=\"label_radios\"> 
            <input type=\"radio\" name=\"$name\" value=\"$i\">$i
            </label> ";
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