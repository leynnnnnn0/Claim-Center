<?Php

require "class/Database.php";

function getData()
{
    $policy_number = isset($_POST['policy-number']) ? $_POST['policy-number'] : null;
    $insured_first_name = isset($_POST['first-name']) ? ucfirst($_POST['first-name']) : null;
    $insured_last_name = isset($_POST['last-name']) ? ucfirst($_POST['last-name']) : null;
    $dol = isset($_POST['dol']) ? $_POST['loss-date']: null;


    $policies = [];

    $db = new Database();
    $query = "SELECT * FROM policies WHERE policy_number = :policy_number OR first_name = :first_name OR last_name = :last_name";
    $result = $db->connection->prepare($query);
    $result->bindParam(':policy_number', $policy_number);
    $result->bindParam(':first_name', $insured_first_name);
    $result->bindParam(':last_name', $insured_last_name);
    $result->execute();
    $policies = $result->fetchAll(PDO::FETCH_ASSOC);

    return $policies;
}



