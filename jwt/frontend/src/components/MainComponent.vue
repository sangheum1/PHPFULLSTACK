<template>
    <div>
        <h1>MainComponents</h1>
        <!-- <button @click="login()" v-if="!$store.state.isToken">로그인</button>
        <button @click="$store.dispatch('logout');" v-if="$store.state.isToken">로그아웃</button>
        {{ $store.state.token }} -->
        <button @click="$store.dispatch('logout')" >로그아웃</button>
    </div>
</template>
<script>
export default {
    name: "MainComponent",
    // methods: {
    //     logout() {
    //         this.$store.dispatch("logout");
    //     }
    // }
}
</script>
<style>
    
</style>