<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
       $sorted_products = array();                              // Array que receberá a estrutura organizada
       foreach(self::products as $p){                           // Percorre os produtos
           $chave_valor = explode("-", $p);                     // Divide os produtos em tipo e tamanho
           if(!array_key_exists($chave_valor[0], $sorted_products)){ // Verifica se a cor já está na nova estrura de dados
               $sorted_products[$chave_valor[0]] = [];               // Se não estiver, cria ela com a cor como chave
           }
           if(!array_key_exists($chave_valor[1], $sorted_products[$chave_valor[0]])){ // Verifica se dentro daquela cor já existe o tamanho cadastrado
               $sorted_products[$chave_valor[0]][$chave_valor[1]] = 0;                // Se não estiver, cria o tamanho
           }
           $sorted_products[$chave_valor[0]][$chave_valor[1]] += 1;                   // Adiciona 1 na quatidade do tamanho e cor passado
        
       }
        return $sorted_products;
    }
}