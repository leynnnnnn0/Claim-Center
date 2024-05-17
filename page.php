<?php
require "src/components/head.php";
require "src/components/navigation.php";
require "functions.php";

$policies = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $policies = getData();
}
?>

<body>
    <div class="claim-body FLEX-ONLY">
        <?php require "src/components/sidebar.php"?>
        <div class="right-content">
            <div class="about-insured-nav FLEX">
                <div class="policy-number">
                    <span>Pol: </span>
                </div>
                <div class="policy-insured">
                    <span>Ins: </span>
                </div>
                <div class="policy-dol">
                    <span>DoL: </span>
                </div>
            </div>
           <?php require "src/steps/step1.php";?>
    </div>
</body>

</html>