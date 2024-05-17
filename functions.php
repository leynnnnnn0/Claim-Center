<?Php

require "class/Database.php";

function getData()
{
    $policy_number = isset($_POST['policy-number']) ? $_POST['policy-number'] : null;
    $insured_first_name = isset($_POST['first-name']) ? $_POST['first-name'] : null;
    $insured_last_name = isset($_POST['last-name']) ? $_POST['last-name'] : null;
    $dol = isset($_POST['dol']) ? $_POST['loss-date']: null;


    $policies = [];

    $db = new Database();
    $query = "SELECT * FROM policies WHERE policy_number = :policy_number";
    $result = $db->connection->prepare($query);
    $result->bindParam(':policy_number', $policy_number);
    $result->execute();
    $policies = $result->fetchAll(PDO::FETCH_ASSOC);

    return $policies;
}



