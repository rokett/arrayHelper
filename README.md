arrayHelper
===========

Helper functions for arrays

Get an item from an array
-----
Get the $array['user']['name'] value from a multidimensional array:

    $name = arr::get($array, 'user.name');

or get the $array['username'] value from a single dimensional array:

    $name = arr::get($array, 'username');

The found value is returned.

Search an array for a specific term
-----
This method differs from PHPs native in_array() function by allowing for partial strings to be matched.
The search is also case-insensitive.

The following command will search $array for the string 'yabbadabbaboo'.  It will return true if it is found and false  if it is not.

    arr::search($array, 'yabbadabbadoo');

