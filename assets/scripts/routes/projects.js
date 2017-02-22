export default {
  init() {
    // JavaScript to be fired on the projects page
    this.els = {
      document: $(document),
      archive: $('.js-concerts_archive'),
    };

    this.els.document.on('click', this.changeYear.bind(this));
  },

  changeYear() {
    let currentYear = '2018';
    $('.concert_year').fadeOut();
    $('.concert_year-'+currentYear).fadeIn();
  },
};
