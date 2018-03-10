# devoxx4kids.github.io

A repository with [devoxx4kids.pl](http://www.devoxx4kids.pl/) web page code - a web page of Polish free and open coding conference for kids which is a part of world-wide movement: [devoxx4kids.org](http://www.devoxx4kids.org/).

# Development

The site is created with Jekyll static page generator written in Ruby: https://jekyllrb.com/

## Requirements

* Ruby
* Jekyll
* HTML, JavaScript, Yaml and (S)CSS knowledge

## How to add new city?

1. Create the main HTML file in `_miasta` directory for the city, for example: `poznan.html`
2. In the front matter there are two required fields: `layout` and `banner`
3. Set `layout` to `page` and `banner` to the name of a PNG file in `images` directory you select to display on the top of your city page
4. Other fields which you can set in the front matter:
  * `title` - write here the text which will appear in the middle of the banner image,
  * `url-path`,
  * `description` - the text which will be displayed below the title on the banner image,
  * `map` - this one does not have any value but requires four more fields: `lat`, `lng`, `zoom` and `icon` once set a map will appear below the content,
   * `lat` - Google Maps lattitute of the place where the event happens,
   * `lng` - Google Maps longitute of the place where the event happens,
   * `zoom` - Google Maps zoom setting,
   * `icon` - icon which will mark on the map the place where the event happens,
  * `golden-sponsor` - does not have any value but it is a collection of golden sponsors,
  * `silver-sponsors` - does not have any value but it is a collection of silver sponsors,
  * `partners` - does not have any value but it is a collection of partners.
5. Once the city page has been created open `index.html` file and add a city spotlight which is a `<section>` element with `spotlight` class within `div#cities`.
