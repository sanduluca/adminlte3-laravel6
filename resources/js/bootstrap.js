window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    // window.Popper = require('popper.js').default;
    // window.$ = window.jQuery = require('jquery');

    // Include all jquery-ui components
    // require('jquery-ui-bundle')

    // require('jquery-ui/ui/widgets/sortable'); // important
    // require('jquery-ui/ui/widgets/accordion'); // important
    // require('jquery-ui/ui/widgets/autocomplete'); // important
    // require('jquery-ui/ui/widgets/selectmenu'); // important
    // require('jquery-ui/ui/widgets/draggable'); // important
    // require('jquery-ui/ui/widgets/datepicker'); // important
    // require('jquery-ui/ui/widgets/mouse'); // important
    // require('jquery-ui/ui/widgets/droppable'); // important
    // require('jquery-ui/ui/widgets/tabs'); // important
    // require('jquery-ui/ui/widgets/button'); // important
    // require('jquery-ui/ui/widgets/checkboxradio'); // important
    // require('jquery-ui/ui/widgets/controlgroup'); // important
    // require('jquery-ui/ui/widgets/dialog'); // important
    // require('jquery-ui/ui/widgets/menu'); // important
    // require('jquery-ui/ui/widgets/progressbar'); // important
    // require('jquery-ui/ui/widgets/selectable'); // important
    // require('jquery-ui/ui/widgets/resizable'); // important
    // require('jquery-ui/ui/widgets/slider'); // important
    // require('jquery-ui/ui/widgets/spinner'); // important
    // require('jquery-ui/ui/widgets/tooltip'); // important
    // $.widget.bridge('uibutton', $.ui.button); // important


    // require('bootstrap'); // important

    // require('chart.js');
    window.Sparkline = require('sparklines');

    // require('jqvmap');
    // require('jqvmap/dist/maps/jquery.vmap.usa'); // USA map for dashboard

    // require('jquery-knob');

    // window.moment = require('moment')

    // require('daterangepicker');
    // require('tempusdominus-bootstrap-4');

    // require('summernote'); // optional
    // require('overlayscrollbars'); // important
    // require('admin-lte'); // important

    // require('./../../public/js/demo')
    // require('./../../public/js/dashboard')


} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
