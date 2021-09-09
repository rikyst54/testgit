<?php

class Client
{
    private string $nom = "";
    private string $prenom = "";
    private DateTime $date_naissance;
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

    public function __construct(string $nom, string $prenom, int $jour, int $mois, int $annee, string $tel, string $email, string $adresse, string $ville, int $cp, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $date_anniv = new DateTime();
        $date_anniv->setDate($annee, $mois, $jour);
        $this->date_naissance = $date_anniv;
        $this->tel = $tel;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->age = $age;
    }
    public function setDateNaissance(int $annee, int $mois, int $jour)
    {
        $this->date_naissance->setDate($annee, $mois, $jour);
    }
    public function getDateNaissance()
    {
        return $this->date_naissance->format('d-m-Y');
    }
    function anniversaire()
    {
        $now = new DateTime('now');
        // var_dump($this->date_naissance->format('d-m'));
        if ($this->date_naissance->format('d-m') == ($now)->format('d-m')) {
            return 'joyeux anniversaire ';
        } else {
            return  'c\'est pas ton anniversaire';
        }
    }
}

// définir variable
$client = new Client("test", "test", 9, 9, 2021, "00.00.00.00.00", "test@gmail.com", "test", "test", 00, 00);

echo $client->anniversaire();
$aujo = new DateTime('now');
