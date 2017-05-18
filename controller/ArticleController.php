<?php

namespace controller;


use \model\Article;
use \model\Editeur;
class ArticleController
{
    public function indexArticle(){
        require "./config/config.php";
        $articles = new Article();
        $articlesChunks = array_chunk($articles->getLatestArticle(), 3);
        require './view/home-news.php';
    }
//sssss
    public function showArticle($id){
        require "./config/config.php";
        $article = new Article();
        $article = $article->getArticle($id);

        $articles = new Article();
        $articles = $articles->getLatestArticle();

        $editeur = new Editeur();
        $editeur = $editeur->getEditeur($article["idEditeur"]);


        require './view/item.php';
    }

    public function actualitesArticle($start){
        require "./config/config.php";
        $articles = new Article();
        $articles = $articles->getAllArticle();
        $nbrPages = (count($articles) - count($articles) % 6 + 6) / 6;
        $articles = array_slice($articles, $start, $start + 6, true);
        $articlesChunks = array_chunk($articles, 2);

        require './view/news.php';

    }
}