<?php
// mettre ici toutes les fonction de notifications
// API d'envoi de mail

// pk : 4fd6a7d7b85f2f9046c8ae344d8d1b1d
// sk : bb7d75e6604120eb8267b0d1cde72f65

function mailjet($destinataire, $subject, $message)
{
    //

    $messageid = FALSE;
    $headers = array ('Content-Type: application/json');
    $paramsend = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "marc.dalo@sycapay.com",
                    'Name' => "App"
                ],
                'To' => [
                    [
                        'Email' => $destinataire,
                    ]
                ],
                'Subject' => $subject,
                'TextPart' => $message,
                'HTMLPart' => $message,
            ]
        ]
    ];
                        
    $url = "https://api.mailjet.com/v3.1/send";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_USERPWD, "4fd6a7d7b85f2f9046c8ae344d8d1b1d:bb7d75e6604120eb8267b0d1cde72f65");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paramsend));
    $response = json_decode(curl_exec($ch));
    $err = curl_error($ch);
    curl_close ($ch);

    return $response;
        
}

// API d'envoi de SMS
