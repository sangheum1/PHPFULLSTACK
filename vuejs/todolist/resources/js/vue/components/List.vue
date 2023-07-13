<template>
    <div v-for="(item,i) in todo" :key="i">
        <input type="checkbox" id="{{ item.id }}" @click="updateCheck( item.id )" v-if="item.completed == true ? checked : null "  v>
        <div>{{ item.content }}</div>
        <!-- {{ i }} -->
        <button type="button" @click="deleteList( item.id ); $emit('select')">삭제</button>
    </div>
</template>
<!-- 클릭했을때 체크가 안되어있으면 체크를 하고 클래스에 0과 1 값을 부여해서 자동으로 바뀌게 하면됨 -->
<script>
export default {
    name: 'List',
    props: {
        todo: Object,
    },
    data() {
        return {
            check: false,
        }
    },
    methods:{
        deleteList(i) {
            axios.delete('http://localhost:8000/api/items/' + i)
            .then(res=> {
                console.log(res);
                // context가 store을 가리킴

            })
            .catch( err=> {
                console.log(err);
            })
        },
        updateCheck(i) {
            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            }
            const data = {
                "item":
            {
                "completed" : !i.completed
            }
            }
            axios.put('http://localhost:8000/api/items/' + i, data, header)
            .then(res => {
                console.log(res);
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
    
}
</script>
<style>
    
</style>