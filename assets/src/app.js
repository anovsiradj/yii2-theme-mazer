
import 'script-loader!mazer/src/assets/static/js/initTheme.js';
import 'script-loader!mazer/src/assets/static/js/components/dark.js';
import 'mazer/src/assets/static/js/components/sidebar.js';

import bootstrap from "bootstrap/dist/js/bootstrap.bundle.js"
globalThis.Bootstrap = globalThis.bootstrap = bootstrap;

import PerfectScrollbar from "perfect-scrollbar/dist/perfect-scrollbar.js";
globalThis.PerfectScrollbar = PerfectScrollbar;
