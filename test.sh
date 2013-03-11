#!/bin/bash

PATH=$1
for FILE in $PATH/*.php
do
	echo "testing $FILE..."
	BASENAME=$(/usr/bin/basename $FILE)

	/usr/bin/php -q convert.php $FILE > $BASENAME.sd
	/usr/bin/php -q revert.php $BASENAME.sd > $BASENAME.re

	/usr/bin/diff -u $FILE $BASENAME.re > $BASENAME.diff

	LINES=$(/bin/cat $BASENAME.diff | /usr/bin/wc -l)

	if [ $LINES -ne 0 ]; then
		echo "$BASENAME has $LINES differing lines";
	fi

done
