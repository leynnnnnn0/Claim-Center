<nav class="navigation-bar">
        <h1 class="nav-logo">Claim Center</h1>
        <div class="nav-options-list FLEX">
            <div class="nav-option claim-dropdown">
                <button class="claim-button" id="claim-button" onclick="showClaimOptions()">Claim</button>
                <i class="fa-solid fa-chevron-down" id="icon" onclick="showClaimOptions()"></i>
                <div class="claim-options" id="claim-options">
                    <div class="options">
                    <a href="#">New Claim</a>
                    </div>
                    <hr/>
                    <div class="search-claim FLEX options">
                        <p>Claim #</p>
                        <input type="text" placeholder="Search Claim">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
            <div class="nav-option claim-dropdown">
                <button class="claim-button" id="claim-button" onclick="showClaimOptions()">Search</button>
                <i class="fa-solid fa-chevron-down" id="icon" onclick="showClaimOptions()"></i>
                <div class="claim-options" id="claim-options">
                    <div class="options">
                    <a href="#">New Claim</a>
                    </div>
                    <hr/>
                    <div class="search-claim FLEX options">
                        <p>Claim #</p>
                        <input type="text" placeholder="Search Claim">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>