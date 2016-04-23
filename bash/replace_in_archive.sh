#!/bin/sh
# Example of usage:
# cd bash
# sh replace_in_archive.sh /archiwum/2015/ /d4k/archiwum/2015/ ../_site/archiwum/2015/

what="$1"
to="$2"
root="$3"
html_files=$(find $root -type f -iname *.html -follow -print)

for i in $html_files
do
	if [ -f $i ];
        then
		$(sed -i "s|$what|"$to"|g" $i)
		echo "Changed $i"
	fi
done
