<?PHP

class RestoRepository
{

    private PDO $myconnect;

    public function __construct()

    {
        $this->myconnect = Dbconnect::getInstance();
    }

    public function searchOne(int $id): array
    {
        $requete = "SELECT * FROM restaurants WHERE id = $id";

        $statement = $this->myconnect->query($requete);
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        return $row ?: [];
    }

    public function searchName(string $myname): array
    {

        $tabRes = [];
        //soundex permet de faire une recherche(requete) presque phonetique
        $rq = "SELECT * FROM restaurants WHERE soundex(nom) = soundex(:myname)";

        $statement = $this->myconnect->prepare($rq);
        $statement->bindValue(":myname", $myname, PDO::PARAM_STR);

        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                array_push($tabRes, $row);
            }
        }

        return $tabRes;
    }

    public function searchAll(): array
    {
        $tabRes = [];

        $rq = "SELECT * FROM restaurants";

        $statement = $this->myconnect->prepare($rq);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            array_push($tabRes, $row);
        }

        return $tabRes;
    }

    public function filterString(string $_sentence): string
    {
        $mysentence = addslashes($_sentence);               // gere les caractere quote speciaux
        $mysentence = htmlspecialchars($mysentence);
        $mysentence = trim($mysentence);

        return $mysentence;
    }

    public function updateRow(int $_id, string $_nom, string  $_adresse, float $_prix, string $_commentaire, float $_note, string $_visite): int
    {
        echo "date:" . $_visite;

        $nom = $this->filterString($_nom);
        $adresse = $this->filterString($_adresse);
        $commentaire = $this->filterString($_commentaire);

        $rq = "UPDATE restaurants 
        SET nom='$nom', adresse='$adresse', prix=$_prix, commentaire='$commentaire', note=$_note, visite='$_visite' 
        WHERE id=$_id ";

        $numberRow = $this->myconnect->exec($rq);

        return $numberRow;
    }

    public function deleteRow(int $_id): int
    {
        $rq = "DELETE FROM restaurants
              WHERE id = $_id";

        $ligneRow = $this->myconnect->exec($rq);

        return $ligneRow;
    }

    public function addRow(string $_nom, string  $_adresse, float $_prix, string $_commentaire, float $_note, string $_visite): int
    {
        $nom = $this->filterString($_nom);
        $adresse = $this->filterString($_adresse);
        $commentaire = $this->filterString($_commentaire);

        $rq = "INSERT INTO restaurants
               VALUES (id, '$nom', '$adresse', $_prix, '$commentaire', $_note,  '$_visite' )";

        $addligne = $this->myconnect->exec($rq);

        return $addligne;
    }
}
