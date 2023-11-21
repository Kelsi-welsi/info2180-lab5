<script>
  
  document.addEventListener('DOMContentLoaded', function () {
    // Wait for the DOM content to be fully loaded before attaching event listeners

    // Find the "Lookup" button by its id
    var lookupButton = document.getElementById('lookup');

    // Attach a click event listener to the button
    lookupButton.addEventListener('click', function () {
        // Fetch data from world.php using Ajax
        var countryInput = document.getElementById('country');
        var countryName = countryInput.value;

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure it to make a GET request to world.php with the country parameter
        xhr.open('GET', 'world.php?country=' + encodeURIComponent(countryName), true);

        // Set up the callback function to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the content of the result div with the data obtained from the Ajax request
                var resultDiv = document.getElementById('result');
                resultDiv.innerHTML = xhr.responseText;
            }
        };

        // Send the Ajax request
        xhr.send();
    });
});
  </script>
