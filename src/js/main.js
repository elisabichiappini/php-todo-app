const { createApp } = Vue;

  createApp({
    data() {
      return {
        todos: [],
      }
    },
    methods: {
      getTodo() {
        axios.get('server.php').then(data => {
          console.log(data);
          this.todos = data.data;
        })
      }
    },
    created() {
      this.getTodo();
    }
  }).mount('#app');
