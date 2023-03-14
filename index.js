(async function getRandomQuote() {
  const response = await fetch("https://api.quotable.io/random")
  const data = await response.json()
  const quote = data.content
  const author = data.author
  const quoteDiv = document.querySelector('#random-quote-generator-div')

  quoteDiv.querySelector('blockquote').innerText = quote
  quoteDiv.querySelector('span').innerText += author
})()