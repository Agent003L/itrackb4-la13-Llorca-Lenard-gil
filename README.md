# LA12: Make the Failures Yours

## H1: Why the error pointed at vendor

The top of the error page named a file inside `vendor` because that is where Laravel's code actually threw the exception when it received my call to `withh()`. My mistake was in my own `MovieController.php`, in `index()`, at the line the Exception trace had already opened for me further down the page.

## H2: What the log line tells me later

My `Log::info('Movie saved', [...])` line records the id and title of each movie that was saved, with the time. Next month it can tell me which record was created and when, which the error page can't, because that page only appears for one visitor at the moment something fails.

## H3: 403 versus redirect

My guard answers 403 when deleting the last movie in a genre, because that rule can never succeed and the request is simply not allowed. A redirect back with a message is better when the visitor can fix it and try again, like a form with a missing field.