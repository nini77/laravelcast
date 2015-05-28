new Vue({
  el: '#demo3',
  data:{
    name: 'FoobarOpen'
  },

  ready :function(){
    var that = this;

    setInterval(function(){
      that.name = 'Updated';
    },5000);
  }
});
