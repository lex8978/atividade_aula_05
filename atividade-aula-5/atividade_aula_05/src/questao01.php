<?php

$resposta = (string) readline("Seu animal é um mamífero? (sim / não): ");

if ($resposta === "sim") {
    $resposta = (string) readline("É quadrúpede? (sim / não): ");
    if ($resposta === "sim") {
        $resposta = (string) readline("É carnívoro? (sim / não): ");
        if ($resposta === "sim") {
            echo "Seu animal é um Leão";
        } elseif ($resposta === "não") {
            $resposta = (string) readline("É herbívoro? (sim / não): ");
            if ($resposta === "não") {
                echo "Cavalo";
            }
        }
    } elseif ($resposta === "não") {
        $resposta = (string) readline("É bípede? (sim / não): ");
        if ($resposta === "sim") {
            $resposta = (string) readline("É onívoro? (sim / não): ");
            if ($resposta === "sim") {
                echo "Seu animal é um Homem";
            } elseif ($resposta === "não") {
                $resposta = (string) readline("É frugívoro? (sim / não): ");
                if ($resposta === "sim") {
                    echo "Seu animal é um Macaco";
                }
            }
        } elseif ($resposta === "não") {
            $resposta = (string) readline("É voador? (sim / não): ");
            if ($resposta === "sim") {
                echo "Seu animal é um Morcego";
            } elseif ($resposta === "não") {
                $resposta = (string) readline("É aquático? (sim / não): ");
                if ($resposta === "sim") {
                    echo "Seu animal é uma Baleia";
                }
            }
        }
    }
} elseif ($resposta === "não") {
    $resposta = (string) readline("É Uma ave? (sim / não): ");
        if($resposta === "sim"){
            $resposta = (string) readline("é não voadora? (sim / não): ");
            if($resposta === "sim"){
                $resposta = (string) readline("é tropical ? (sim / não): ");
                if($resposta === "sim"){
                    echo "Seu animal é uma Avestruz";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("é polar ? (sim / não): ");
                    if($resposta === "sim"){
                        echo "Seu animal é um Pinguim";
                    }
                }
            }elseif($resposta === "não"){
                $resposta = (string) readline("é nadadora ? (sim / não): ");
                if($resposta === "sim"){    
                    echo "Seu animal é um Pato";
                }elseif ($resposta === "não"){
                    $resposta = (string) readline("é de rapina ? (sim / não): ");
                    if($resposta === "sim"){
                        echo "Seu animal é uma Águia";
                    }   
                }
            }
        }elseif ($resposta === "não"){
            $resposta = (string) readline("é um réptil? (sim / não): ");
            if($resposta === "sim"){
                $resposta = (string) readline("é com casco? (sim / não): ");
                if($resposta === "sim"){
                    echo "Seu animal é uma Tartaruga";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("é carnívero? (sim / não): ");
                    if($resposta === "sim"){
                        echo "Seu animal é um Crocodilo";
                    }elseif($resposta === "não"){
                        $resposta = (string) readline("é sem patas? (sim / não): ");
                        if($resposta === "sim"){
                            echo "Seu animal é uma Cobra";
                        }
                    }
                }
            }
        }
}