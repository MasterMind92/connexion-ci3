<?php

// fonction de generation d'un token

function generate_token(){
    return sha1(time());
}


// fonction de generation d'un lien

function generate_link($token){
    
    return "reinitialisation/".$token;
}

// fonction de verification de l'existence d'un utilisateur en session

function userExist()
{
  return isset($_SESSION['user']); 
}

