
$(document).ready(function () {
 new Vue({
  el: '#editor',
  data: {
    input: '# A CULPA È DELES # CSS DISTO TEM UM COMMENT ONDE TA'
  },
  computed: {
    compiledMarkdown: function () {
      return marked(this.input, { sanitize: true })
    }
  },
  methods: {
    update: _.debounce(function (e) {
      this.input = e.target.value
    }, 300)
  }
})
})