let quote

fetch("https://api.quotable.io/random")
  .then((response) => response.json())
  .then((data) => {
    quote = data.content
    document.querySelector('#random-quote').innerText = quote
  });