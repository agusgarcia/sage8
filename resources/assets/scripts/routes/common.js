export default {
    init() {
        // JavaScript to be fired on all pages

        if (window.innerWidth > window.innerHeight) {
            $('.rotate-phone').hide();
        } else {
          //  $('.rotate-phone').show();
            $('.rotate-phone').hide();

        }

        //window.addEventListener('orientationchange', this.orientationChanged.bind(this));

    },

    orientationChanged() {
        if (window.innerWidth > window.innerHeight) {
            $('.rotate-phone').hide();
        } else {
            $('.rotate-phone').show();
        }
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
