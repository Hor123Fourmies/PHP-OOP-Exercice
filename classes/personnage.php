<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:40
 */

// Ma classe s'apelle personnage
class personnage {

    // La propriété id est privée, je ne peux pas la modifier ou la lire directement en-dehors de cette classe
    private $id;
    private $nom;

    // Constructeur de ma classe permettant de définir des valeurs par défaut lorsqu'elle est instanciée
    public function __construct()
    {
        //$this->nom = "Nom par défaut";
        $this->nom = "Jules";
        $this->x = 0;
        $this->y = 0;
    }

    // Méthode permettant de déplacer le personnage vers la droite
    public function walkRight()
    {
        $this->x+=1;

    }

    public function walkLeft()
    {
        $this->x-=1;

    }


    public function walkTop()
    {
        $this->y+=1;

    }

    public function walkBottom()
    {
        $this->y-=1;

    }

    // Setter permettant de définir l'attribut privé id
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // Getter permettant de retourner l'attribut privé id
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
       return $this->nom;
    }

} 