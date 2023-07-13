<template>
    <div>
        <Todo @insert="createList()"></Todo>
        <List @delete="deleteList()" @select="getList()" :todo="data"></List>
    </div>
</template>
<script>
import List from "./components/List.vue";
import Todo from "./components/Todo.vue";

export default {
    name: 'App',
    data() {
        return {
            data: null,
        }
    },
    created() {
        this.getList();
    },
    methods:{
        getList() {
            axios.get('http://localhost:8000/api/items')
            .then(res=> {
                console.log('성공 했음');
                // context가 store을 가리킴
                console.log(res.data);
                this.data = res
                .data;
            })
            .catch( err=> {
                console.log(err, '실패')
            })
        },
        createList() {
            // const header = {
            //     headers: {
            //         'Content-Type' : 'application/json'
            //     }
            // }
            const data = {
                "item":
            {
                "content" : document.getElementById('content').value
            }
            }
            axios.post('http://localhost:8000/api/items', data)
            .then(res => {
                console.log('insert 성공');
                // res.status // http 코드 확인(200,404,500)
                this.data.unshift(res.data);
                document.getElementById('content').value = "";
            })
        },
        
    },
    components: {
        List,
        Todo
    }
}

</script>
<style>
    
</style>