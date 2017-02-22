export default {
  init() {
    this.els = {
      document: $(document),
    };
    const mes = $('h1').position();
    alert(`mes${mes}`);
    this.mess();
  },

  mess() {
    const mes = $('h1').position();
    console.log(`mes${mes}`);
  },
};
