<body class="homePage" onload="loadScript()">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        
                        <a href="/dntcentral/" class="navbar-brand">D&T Central</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbar10">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item dropdown">
                                    
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Formats
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/dntcentral/format">Format Page</a></li>
                                        <li><a href="/dntcentral/legacy/">Legacy</a></li>
                                        <li><a href="/dntcentral/modern/">Modern</a></li>
                                        <li><a href="/dntcentral/vintage">Vintage</a></li>
                                        <li><a href="/dntcentral/commander">Commander</a></li>                           
                                        <li><a href="/dntcentral/standard/">Standard</a></li>
                                    </ul>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Modern Guides
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a href="/dntcentral/modern/variations/">Splashes & Other Variations</a></li>
                                    <li><a href="/dntcentral/modern/mulligans">Mulligan Guide</a></li>
                                    <li><a href="/dntcentral/modern/budget">Budget Options</a></li>
                                    <li><a href="/dntcentral/modern/matchupguides">Matchup Guides</a></li>
                                    <li><a href="/dntcentral/modern/deathandchoices/">Death and Choices</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dntrcentral/articles/">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dntcentral/videos/">Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dntcentral/spicespace/">Spice Space</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dntcentral/resources">Other Resources</a>
                                </li>
                                <li class="nav-item search-nav-item">
                                    <form action="/dntcentral/searchresults.php" method="GET" class="navSearchForm">
                                    <input type="text" name="q" id="navSearchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="clearSearchStuff()" onblur="barNotActive()" onkeyup="stoppedTyping()" /><input type="submit" id="navSearchBtn" value="Go!" onclick="verify()" disabled />
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
