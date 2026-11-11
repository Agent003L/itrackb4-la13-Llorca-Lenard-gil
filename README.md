# LA13: Open the Front Door

## J1: HomeController vs a resource index()

A resource `index()` loads a list of records from the database through a model, and it usually deals with the query string (search, filter, page) before returning the view. My `HomeController::index()` does neither: it only counts two tables and returns the front page.

## J2: Pagination links and the search term

Before I added `withQueryString()`, the page links contained only `?page=2`. The controller therefore received no `search`, `genre` or `watched` value, so it treated the request as unfiltered and returned the full list with an empty search box.

## J3: A misspelled sort value

A misspelled sort value like `?sort=titel` doesn't throw an error in SQLite. The page just loads in no particular order, so nobody notices or reports it, which is worse than a visible error. My allowed list (`title`, `year`, `director`) falls back to `title` for anything else, so the list always sorts.