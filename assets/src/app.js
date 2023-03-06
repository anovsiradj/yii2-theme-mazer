
require('mazer/src/assets/js/initTheme')

// Mazer internal JS. Include this in your project to get
// the sidebar running.
require("mazer/src/assets/js/components/dark")

// Don't forget to load bootstrap js in your project
// Here, we load it in our app.js

globalThis.Bootstrap = require('bootstrap/dist/js/bootstrap.js');

// We could import PerfectScrollbar directly in the sidebar module
globalThis.PerfectScrollbar = require("perfect-scrollbar/dist/perfect-scrollbar.js")

globalThis.MazerSidebar = require("mazer/src/assets/js/components/sidebar")
