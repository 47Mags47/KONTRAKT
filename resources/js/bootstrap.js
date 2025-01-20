import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery;
window.jQuery = jQuery;

// jQuery Плагины
import 'waypoints/lib/noframework.waypoints'
window.Waypoint = Waypoint

// Либы
import '@fortawesome/fontawesome-free/js/all';
