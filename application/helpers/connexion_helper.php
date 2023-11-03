<?php

// fonction de generation d'un token

function generate_token(){
    return sha1(time());
}


// fonction de generation d'un lien

function generate_link($token){
    
    return "reinitialisation/".$token;
}

