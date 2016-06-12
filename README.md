# Swimmy

![swimmy](https://raw.githubusercontent.com/featherplain/swimmy/gh-pages/dist/img/readme/ssAll.png)

Based on [Minnow by Automattic](https://wordpress.org/themes/minnow).

## Requires for devlopment

* Node.js
* npm

If you need more information, check out [myproject - Project starter kit using gulp](http://github.com/featherplain/myproject) for details.

## Setup your local project

Before setup local project, install Minnow at your WordPress dashboard.

1. On your WordPress `themes` directory,

		$ git clone git@github.com:featherplain/swimmy.git

2. Copy files to your WordPress plugin directory which is in `src/plugins` directory.

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
