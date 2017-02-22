export default {
  init() {
    console.log("init concerts");
    // JavaScript to be fired on the concerts page
    this.els = {
      document: $(document),
      archive: $('.js-concerts_archive'),
    };

    this.els.archive.on('click', 'li', () => {
      console.log("ahhhhhh");
    });

  },

  finalize() {
  },

};
