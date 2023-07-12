<template>
    <!-- 비동기 처리 데이터 가져오는 방법
    {{ $store.state.boardData }} -->
    <!-- <div class="post">
        <div class="post-img"></div>
        <div class="post-content">
            <p>0 좋아요</p>
            <p><strong>미어캣</strong> 내용내용</p>
            <p>2023-07-11</p>
        </div>
    </div> -->

    <div v-for="(item,index) in $store.state.boardData" :key="index" class="post">
        <div class="post-img" :class="item.filter" :style="{backgroundImage : `url('${item.img}')`}"></div>
        <!-- <img :src="item.img" class="post-img"> -->
        <div class="post-content">
            <p>{{ item.name }}</p>
            <p>{{ item.likes }} 좋아요</p>
            <p>{{ item.content }}</p>
        </div>
    </div>

</template>
<script>
export default {
    name: 'PostComponent'
}
</script>
<style>
    
</style>