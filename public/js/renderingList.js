new Vue ({
  el: '#demo4',

  data: {
    names: ['stan','Jane','John','Taylor','Michelle','Susan']
  },

  methods: {
    addName: function(){

      this.names.push(this.newName);

      this.newName = '';
    }
  }
});
