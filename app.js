function toggleTo(a) {
    let artmain = document.querySelector(`#${a}`)
    hideAllArticles()
    artmain.classList.remove('hide-me');
}

function hideAllArticles() {
    let articles = document.getElementsByClassName('art-main')
    Array.prototype.forEach.call(articles, function(c) {
        c.classList.add('hide-me')
        console.log('Hiding all ' + c + articles)
    })
}

function showLandingpage() {
    let b = document.getElementById('art-addiction')
    b.classList.remove('hide-me')
    console.log('showing landingpage')
}

hideAllArticles()
showLandingpage()