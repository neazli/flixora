# Flixora

A movie/TV discovery web app built with a PHP backend and TMDb API integration, featuring a content-based recommendation engine based on genre and keyword similarity.

**Status: Actively in development.**

## Completed So Far

- ✅ PHP REST API — serves live trending movie/TV data (`trending.php`)
- ✅ Search endpoint (`search.php`) — live search via TMDb's `search/multi`
- ✅ Content-based recommendation engine (`recommend.php`) — scores candidates by genre overlap, returns the top 10 matches
- ✅ Clean, dark-themed frontend (vanilla HTML/CSS/JS) — trending list and live search results render as cards

## In Progress

- ⬜ Wiring the recommendation engine into the frontend (currently only tested directly via the backend API)
- ⬜ Incorporating keyword data into the scoring logic (currently genre-based only)
- ⬜ Movie/TV detail page (`details.php`)
- ⬜ Deployment

## Tech Stack

- **Backend:** PHP (cURL for TMDb API integration)
- **Frontend:** Vanilla JavaScript, HTML, CSS
- **Data Source:** [TMDb API](https://www.themoviedb.org/documentation/api)

## Setup

1. Get a free API key from TMDb
2. Create `backend/config.php`:
   ```php
   <?php
   define('TMDB_API_KEY', 'your-key-here');
   ```
3. Start the backend:
   ```
   cd backend
   php -S localhost:8001
   ```
4. Open `frontend/index.html` in your browser
