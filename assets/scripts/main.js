if (module.hot) {
  module.hot.accept();
}

/** import external dependencies */
import 'jquery';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
// import projects from './routes/projects';
import aboutUs from './routes/about';
// import postTypeArchiveConcert from './routes/post_type_archive_concert';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  /** About Us page, note the change from about-us to aboutUs. */
  aboutUs,
  /** Concerts page */
//  postTypeArchiveConcert,
  /** Projects page */
  // projects,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());


if (module.hot) {
  module.hot.accept();
}


