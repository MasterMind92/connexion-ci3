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

function user_logged($redirect="ConnexionCtrl/"){

    if (!isset($_SESSION['user'])) {
        return redirect($redirect);
    }

}

// fonction de verification de l'existence d'un utilisateur en session
function deconnexion()
{
  unset($_SESSION['user']); 

  user_logged();

}

