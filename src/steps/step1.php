<div class="step-number">
    <h1>STEP 1: Search Policy</h1>
</div>
<hr />
<form class="search-policy" action="page.php" method="POST">
    <div class="input-div FLEX">
        <label for="policy-number">Policy #</label>
        <input type="text" name="policy-number" id="policy-number">
    </div>
    <div class="input-div FLEX">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="first-name">
    </div>
    <div class="input-div FLEX">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="last-name">
    </div>
    <div class="input-div FLEX">
        <label for="loss-date">Loss Date</label>
        <input type="text" id="loss-date" name="loss-date">
    </div>
    <div class="search-policy-buttons">
        <button class="search-policy-button">Search</button>
        <button class="search-policy-button">Reset</button>
    </div>
</form>
<div class="policy-table">
    <table class="policy-result-table">
        <tr class="header">
            <th></th>
            <th>Policy #</th>
            <th>Insured</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>ZIP Code</th>
            <th>Effective</th>
            <th>Expires</th>
        </tr>
        <?php
        if ($policies) {
            foreach ($policies as $policy) {
                echo "<tr>";
                echo "<td><button id='".$policy['policy_number']."' onClick='handleSelected(". $policy['policy_number'] .")'>select</button></td>";
                echo "<td>" . $policy['policy_number'] . "</td>";
                echo "<td>" . $policy['first_name'] . "</td>";
                echo "<td>" . $policy['address'] . "</td>";
                echo "<td>" . $policy['city'] . "</td>";
                echo "<td>" . $policy['state'] . "</td>";
                echo "<td>" . $policy['zip_code'] . "</td>";
                echo "<td>" . $policy['effective'] . "</td>";
                echo "<td>" . $policy['expires'] . "</td>";
                echo "</tr>";
            }
        }


        ?>
    </table>
</div>
</div>