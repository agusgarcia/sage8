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
    this.currentYearList = $(`li.concert_year-${this.currentYear}`);
    this.notCurrentYearList = $(`li.concert_year:not(.concert_year-${this.currentYear})`);
    this.notCurrentYearFirst = $(`li.concert_year:first-child`);
    this.selectedYear = '';

    this.els.$archive.on('click', 'li', this.changeYear.bind(this));

    if (this.currentYearList.length) {
      this.notCurrentYearList.hide();
    } else {
      this.notCurrentYearList.hide();
      this.notCurrentYearFirst.show();
    }

  },

  changeYear(e) {
    const $currentTarget = $(e.currentTarget);
    this.selectedYear = $currentTarget.data('year');
    this.els.$concertYear.fadeOut().delay(300);

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
