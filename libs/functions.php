<?php

function P($param){
    return $_POST[$param];
}
function G($param){
    return $_GET[$param];
}
function sql($param){

    return addslashes(htmlspecialchars($param));

}
