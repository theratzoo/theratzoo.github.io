function clearSearchStuff() {
            var searchBar = document.getElementById("navSearchBar");
            
            
            if(searchBar.value == "Search...") {
                searchBar.value = "";
              
            }
          }

          function barNotActive() {
            var searchBar = document.getElementById('navSearchBar');
            if(searchBar.value == '') {
              searchBar.value = 'Search...';
              seachBar.placeholder = '';
            }
          }

          function stoppedTyping() {
            var searchBar = document.getElementById('navSearchBar');
            if(searchBar.value.length == 0 || searchBar.value == "Search...") {
                document.getElementById('navSearchBtn').disabled = true;
            } else {
                document.getElementById('navSearchBtn').disabled = false;
            }
            
          }
          function verify() {
            if(document.getElementById('navSearchBar').value == "Search..." || document.getElementById('navSearchBar').value.length == 0) {
                alert("enter text into search");
            } else {
                //do the button functionality...
            }
          }