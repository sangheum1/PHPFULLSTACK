<template>
  <!-- store.js 값 넘어오는지 확인 -->
  <!-- {{ $store.state.lastId }} -->
  
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li v-if="$store.state.tabFlg !== 0" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')" class="header-button header-button-left">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li v-if="$store.state.tabFlg == 1" @click="$store.commit('changeTabFlg', 2)" class="header-button header-button-right">다음</li>
      <li v-if="$store.state.tabFlg == 2" @click="$store.dispatch('writeContent');" class="header-button header-button-right">작성</li>
    </ul>
  </div>
  <!-- 컨텐츠 -->
  <ContainerComponent></ContainerComponent>

  <!-- this는 템플릿에 있어서 사용 x -->
  <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList');">더보기</button>

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input @change="updating" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue';

export default {
  name: 'App',
  // actions는 dispatch로 접근
  created() {
    this.$store.dispatch('getMainList')
  },
  methods: {
    // e는 이벤트 발생시 값들이 담겨 있음
    updating(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      // mutations는 commit로 접근
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', 1);
      this.$store.commit('changePostImg', file[0]);
      e.target.value = "";
    }
  },
  components: {
    ContainerComponent,
  }
}
</script> 

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
