<html>
  <head>
    <title>AJAX Quotes</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Tulpen+One&display=swap');
    @import url('https://fonts.googleapis.com/css2family=Qwitcher+Grypen:wght@700&display=swap');

            /* CSS to hide the quote container initially and apply fade-in animation */
        #quoteContainer {
            display: none;
            font-size:xx-large;
            text-shadow: 4px 4px 4px #aaa;
        }

        /* CSS for the fade-in animation */
        .fade-in {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

    </style>
  </head>
  <body>
    <h1>AJAX Quotes </h1>
   <p>The page uses AJAX to retrieve random quotes from a PHP server-side script. When the page loads, it displays these quotes with visual effects such as a fade-in transition, unique Google Fonts, and a floating appearance created by text shadow.</p>
   
    <div id="quoteContainer">Quotes go here</div>
    <script>

      var counter = 0;
      
      function getRandomQuote(){

        var fonts = ["Shadows Into Light", "Tulpen One", "Qwitcher Grypen"]
       // create ajax object 
        var xhr = new XMLHttpRequest();

        // target the server page 
        xhr.open('GET', 'random_quotes.php', true);

        // On success
        xhr.onload = function(){
          if(xhr.status >= 200 && xhr.status < 300) { // show data
           // document.querySelector("#quoteContainer").innerText = xhr.responseText;
            
            var quoteContainer = document.querySelector("#quoteContainer");
            quoteContainer.innerText = xhr.responseText;
            // add font fmaily 
            quoteContainer.style.fontFamily = fonts[counter];
            counter++;

            if (counter >= fonts.lenght) {
              counter = 0; 
            }
            
            quoteContainer.style.display = "block";
            quoteContainer.classList.add("fade-in");
            setTimeout(function(){
              quoteContainer.classList.remove("fade-in");
            }, 1000);
          } else {
            document.querySelector("#quoteContainer").innerText = "Failed to fetch quote." + xhr.status;
          }
        };
        // On error
        xhr.onerror = function(){
          alert("Oh oh! There was an error");
        };
  
        // Write data 
        xhr.send();
      }

      function displayRandomQuote(){
        // Retrive quote
        getRandomQuote();

        // Loop every 5 seconds 
        setInterval(getRandomQuote,5000)
      }
      
      displayRandomQuote();
      
    </script>
  </body>
</html>


