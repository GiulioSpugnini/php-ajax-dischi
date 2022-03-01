Vue.config.devtools = true;

const app = new Vue({
  el: "#root",
  data: {
    albums: [],
    search: "",
  },
  methods: {
    getAlbumSearched() {
      axios
        .get(`http://localhost/php-ajax-dischi/database.php?genre=${this.search}`)
        .then((res) => {
          this.albums = res.data;
        })
        .catch((err) => {
          console.errror(err);
        });
    },
  },
  mounted() {
    this.getAlbumSearched();
  },
});
