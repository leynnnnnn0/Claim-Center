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
        <div class="side-bar">
            <span class="side-bar-title">New Claim Wizard</span>
            <ul class="steps">
                <li>Find Policy</li>
                <li>Basic Info</li>
                <li>Loss Details</li>
                <li>Save & Assign Claim</li>
            </ul>
        </div>
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