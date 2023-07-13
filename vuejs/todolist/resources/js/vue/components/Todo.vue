<template>
    <div class="headerCon">
        <div class="headerName">
            <h1>Todo List</h1>
        </div>
        <div class="gridCont1">
            <input type="text" placeholder="목록을 적어주세요" id="content">
            <button type="button" @click="$emit('insert')">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Todo'
}
</script>
<style>
    *{
        margin: 0;
        width: 100%;
    }
    .headerCon {
        background-color: bisque;
        text-align: center;
        width: 50vw;
        margin: auto;
        height: 10vh;
    }
    .headerName {
        color: black;
    }
    .gridCont1 {
        display: grid;
        width: 40vw;
        grid-template-columns: 9fr 1fr;
        margin: auto;
        grid-column-gap: 20px;
    }
</style>