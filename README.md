# laravel-music-library
Simple music library built using Laravel for personal competency testing

## Tasks
Using the Laravel Documentation please complete the following tasks:
* Order the albums on the Artist's albums page (eg /artist/1/albums ) in descending order based on release date.
* Add a page listing all songs on an album ( /album/{albumId}/songs ). The songs must be ordered by track number.
* Allow a user to add songs to their library.
* Allow a user to add an album to their library (this will add all songs on the album to their library).
* Allow a user to add an artist to their library (this will add all of the artist's songs to their library).
* Add a page that allows a user to view all songs in their library ( /library ). The songs should show which album & artist they belong to.
* Add a page showing all artists in the user's library ( /library/artists ). Each artist should be clickable to show all albums in the library for that artist.
* Add a page showing all albums in the user's library ( /library/albums ). Each album should be clickable to show all songs in the library for that album. The album should display which artist the album belongs to.
* Allow a user to 'love' a song.
* Add page showing all loved songs in the users library ( /library/loved ). The list of loved songs should display which album and artist the song belongs to.

Migrations must be written for all database schema changes.

Some routes have already been defined for you in routes/web.php.

Don't worry too much about how polished the front-end is. Functionality is more important here
than looks
