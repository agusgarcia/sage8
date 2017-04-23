export default {
  init() {
    console.log("init concerts");
    // JavaScript to be fired on the concerts page
    this.els = {
      document: $(document),
      $archive: $('.projects_archive'),
      $closeDetails: $('.project_information_button-close'),
      $blackBg: $('.background-black'),
    };

    this.els.$archive.on('click', '.project_name', this.showDetails.bind(this));
    this.els.$closeDetails.on('click', this.hideDetails.bind(this));

  },

  showDetails(e) {
    const $currentTarget = $(e.currentTarget);
    const $details = $currentTarget.parent().siblings('.project_information');
    $details.fadeIn();
    this.els.$blackBg.fadeIn();
  },

  hideDetails(e) {
    const $currentTarget = $(e.currentTarget);
    const $details = $currentTarget.parent('.project_information');
    $details.fadeOut();
    this.els.$blackBg.fadeOut();
  },

};
