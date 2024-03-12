const { createApp } = Vue;

  createApp({
    data() {
      return {
        todos: [],
        todo: ''
      }
    },
    methods: {
      getTodos() {
        axios.get('server.php').then(response => {
          console.log(response);
          this.todos = response.data;
        })
      },
      addTodo() {
        const data = {
          create: 1,
          text: this.todo,
        };
        
        axios
        .post('server.php', data, {
          headers: {
            'Content-Type' : 'multipart/form-data',
          }
        })
        .then((response) => {
          this.todos = response.data;
        })
      }
    },
    created() {
      this.getTodos();
    }
  }).mount('#app');
