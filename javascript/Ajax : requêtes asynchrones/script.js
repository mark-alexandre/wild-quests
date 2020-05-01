// This function loads pokemon data from the Pokemon API
function fetchSimpsonsQuotesJSON() {
    // Feel free to download this HTML and edit it, to use another Pokemon ID
    const url = `https://simpsons-quotes-api.herokuapp.com/quotes`;
    axios.get(url)
        .then(function(response) {
            return response.data; // response.data instead of response.json() with fetch
        })
        .then(function(simpsonQuote) {
            console.log('data decoded from JSON:', simpsonQuote);

            // Build a block of HTML
            const quoteHtml = `
        <p><strong>${simpsonQuote[0].character}</strong></p>
        <p><i>${simpsonQuote[0].quote}</i></p>
        <img src="${simpsonQuote[0].image}" />
      `;
            document.querySelector('#simpson-quote').innerHTML = quoteHtml;
        });
}

fetchSimpsonsQuotesJSON();

// Event listener for button
document.getElementById("myBtn").addEventListener("click", fetchSimpsonsQuotesJSON);