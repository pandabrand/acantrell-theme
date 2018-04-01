// import external dependencies
import 'jquery';
import fontawesome from '@fortawesome/fontawesome';
import faBars from '@fortawesome/fontawesome-free-solid/faBars';
import faExternalLinkAlt from '@fortawesome/fontawesome-free-solid/faExternalLinkAlt';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

fontawesome.library.add(faBars, faExternalLinkAlt);

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
