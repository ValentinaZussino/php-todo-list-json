const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            todoList: [],
            apiUrl: './server.php',
            newTodoText:'',
        }
    }, 
    methods: {
        addTodo(){
            const data = {
                newTodoText: this.newTodoText,
            }
            axios.post(this.apiUrl,data,{headers: {'Content-Type' : 'multipart/form-data'}
            }).then((response)=>{
                this.newTodoText = '';
                this.getTodo();
            })
        },
        getTodo(){
            axios.get(this.apiUrl).then(
                (response) => {
                    this.todoList = response.data;
                }
            )
        },
        // cancellaTodo(i){
        //     this.lista.splice(i, 1);
        // },
        toggleTodo(i){
            const data = {
                index: i,
            }
            axios.post(this.apiUrl, data,{headers: {'Content-Type' : 'multipart/form-data'}
        }).then((response)=>{
            this.getTodo();
            console.log(response.data);
        })
        },
        toggleHamburger(){
            document.body.classList.toggle('vz_menu-open');
        }
    },
    mounted(){
        this.getTodo();
    }
}).mount('#app')