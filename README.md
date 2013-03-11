Froxlor-i18n
============

Froxlor localization helper scripts

These scripts are tests to check how we can convert the existing localization format to a format that is compatible with any translation service (like getlocalization or transifex) in order to make translating easier.


Usage:
`php -q convert.php <language.lng.php> > <language_onedimensional.lng.php>`
to convert the language file array to a single dimensional array (that can be used with translation toolkit, transifex or getlocalization)

`php -q revert.php <language_onedimensional.lng.php> > <language.lng.php>`
will then convert the file back to its default state

`test.php <path_to_lng_folder>`
will perform a test, if the original file equals the back and forth converted file

result of todays test: 0 differences

Froxlor localization Todo:

[ ] In order to make the strings more easy translateable, variables should not be put into the localization but rather encapsed in `printf()` functions
