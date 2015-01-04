# WordPress theme - 'Swimmy'

![swimmy](https://raw.githubusercontent.com/featherplain/swimmy/gh-pages/dist/img/readme/ssAll.png)

## Requires for devlopment

* Bower
* Node.js
* npm
* Ruby
* Sass over3.1
* sass-globbing

Based on [myproject - Project starter kit using gulp](http://github.com/featherplain/myproject).

## Setup your local project

1. 	On your WordPress `theme` directory,

		$ git clone git@github.org:featherplain/swimmy.git swimmy

2. 	Copy files to your WordPress plugin directory which is in `src/plugins` directory.

3.  Install gulp.

		$ npm install -g gulp

4.  Install some dependencies.

		$ cd path/to/directory ; npm install
	
5.  Install sass-globbing.

		$ gem install sass-globbing

6.  Install bower components and initialize them.

		$ npm run gulp-init

7.  Run gulp.

		$ gulp

## License

[GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html)

## Thanks

Swimmy is child theme of ['Minnow' by Automattic](https://wordpress.com/themes/minnow/).
