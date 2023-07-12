<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <router-link to="/">홈으로</router-link>
  <router-link to="/post">post 로</router-link>
  
  <!-- 실시갅 변환 -->
  <p>{{ data.name }}</p>
  <button @click="data.name = '김김김'">김김김</button>
  <br>
  <br>
  <PostComponent :propsTest="1"></PostComponent>
  <!-- 실시간 변환 x -->
  <!-- <p>{{ test }}</p>
  <button @click="test = 'aaa'">김김김</button> -->

  <p>{{ data2.name }}</p>
  <button @click="data2.name = 'data2'">data2</button>

  <router-view>
    <span>222</span>
  </router-view>






  <!-- 원래 했던 방식 -->
  <!-- <ContainerComponent v-if="flg"></ContainerComponent>
  <PostComponent v-if="!flg"></PostComponent>
  <button @click="flg = !flg"></button> -->

</template>

<script>

import {ref, reactive} from 'vue';

// import ContainerComponent from './components/ContainerComponent.vue'
import PostComponent from './components/PostComponent.vue'

export default {
  name: 'App',
  setup() {
    // 데이터 쓰려면 reference 안에 선언(모든 타입 데이터 바읹딩 가능)
    let data = ref({name: '홍길동', age: 20});
    let test = 'bbb';
    // object같은 객체 만 데이터 바인딩 가능   ex) let data2 = reactive(1); 이런건 안먹힘
    let data2 = reactive({name: '철수', age: 5});

    // composition은 항상 리턴 하기
    return { test, data, data2 };
  },
  components: {
    PostComponent
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
