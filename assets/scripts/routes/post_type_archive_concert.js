export default {
  init() {
    console.log("init concerts");
    // JavaScript to be fired on the concerts page
    this.els = {
      document: $(document),
      $archive: $('.js-concerts_archive'),
      $concertYear: $('.concert_year'),
    };

    this.currentYear = new Date().getFullYear();
    this.selectedYear = '';

    this.els.$archive.on('click', 'li', this.changeYear.bind(this));

    $(`li.concert_year:not(.concert_year-${this.currentYear})`).hide();
  },

  changeYear(e) {
    const $currentTarget = $(e.currentTarget);
    this.selectedYear = $currentTarget.data('year');
    this.els.$concertYear.fadeOut();

    this.els.$concertYear.each((i, year) => {
      console.log(year);
      if ($(year).hasClass(`concert_year-${this.selectedYear}`)) {
        $(year).fadeIn();
      }
    });
  },

  finalize() {
  },

};
