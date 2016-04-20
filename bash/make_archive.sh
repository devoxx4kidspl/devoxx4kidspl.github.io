#!/bin/sh

archive_page_root_address="$1"
archive_file="$2"

if [ $archive_file ];
then
   echo "File $achive_file does not exist."
   exit
fi

echo "Changing images path..."
sed -i "s|/images/|"$archive_page_root_address"/images/|g" $archive_file 

echo "Changing javascript files path..."
sed -i "s|/js/|"$archive_page_root_address"/js/|g" $archive_file

echo "Changing CSS files path..."
sed -i "s|/css/|"$archive_page_root_address"/css/|g" $archive_file

echo "Done.\n"
