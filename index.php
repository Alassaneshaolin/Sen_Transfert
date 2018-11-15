<?php
    require 'View/vendor/autoload.php';

    //Configuration twig
$loader = new Twig_Loader_Filesystem('View');

$twig = new Twig_Environment($loader, [
    'cache' => false,
]);

$link = basename($_SERVER['REQUEST_URI']); //Pour n'afficher que le dernier repertoire de la barre d'adresse

// if($link == 'accueil')
// {
//     echo $twig->render('pages/accueil.twig',['title' => $link]);
// }else if($link == 'about')
// {
//     echo $twig->render('pages/about.twig',['title' => $link]);
// }else if($link == 'politique')
// {
//     echo $twig->render('pages/politique.twig',['title' => $link]);
// }
// else{
//     echo $twig->render('pages/404.twig',['title' => $link]);
// }


    switch($link)
    {
        case 'accueil':
            echo $twig->render('pages/accueil.twig');
            break;
        case 'about':
            echo $twig->render('pages/about.twig');
            break;
        case 'politique':
            echo $twig->render('pages/politique.twig');
            break;
        default:
            header('HTTP/2.0 404 Not found');
            echo $twig->render('pages/404.twig');
            break;
    }
?>