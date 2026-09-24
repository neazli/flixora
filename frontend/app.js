
const movieGrid= document.getElementById("movieGrid");

function renderMovies(movies){
    movieGrid.innerHTML="";

    movies.forEach(movie =>{
        const card = document.createElement("div");
        card.className = "card";
        
        card.innerHTML = `
        <img src="https://image.tmdb.org/t/p/w342${movie.poster_path}" alt="${movie.title || movie.name}">
        <div class= "card-title">${movie.title || movie.name}</div>

        `;
        movieGrid.appendChild(card);

    })
}

fetch("http://localhost:8001/trending.php").then(response => response.json()).then(data =>renderMovies(data) );

const searchInput=document.getElementById("searchInput");

searchInput.addEventListener("input",()=>{
    const searchData=searchInput.value;
    if(searchData !== ""){
        fetch("http://localhost:8001/search.php?q=" + searchData).then(response => response.json()).then(data =>renderMovies(data) );

    }

});



