<?php

class Client
{
    private string $nom = "";
    private string $prenom = "";
    private string $tel = "";
    private string $email = "";
    private string $adresse = "";
    private string $ville = "";
    private int $cp = 0;
    private int $age = 0;

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function setCp(int $cp)
    {
        $this->cp = $cp;
    }
    public function getCp()
    {
        return $this->cp;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function __construct(string $nom, string $prenom, string $tel, string $email, string $adresse, string $ville, int $cp, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->age = $age;
    }
    public function afficher()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Tèl. : " . $this->tel . "<br>";
        echo "Email : " . $this->email . "<br>";
        echo "Adresse : " . $this->adresse . "<br>";
        echo "Ville : " . $this->ville . "<br>";
        echo "Cp : " . $this->cp . "<br>";
        echo "Age : " . $this->age;
    }
}

// définir variable
$client = new Client("test", "test", "00.00.00.00.00", "test@gmail.com", "test", "test", 00, 00);

var_dump($client->afficher());
