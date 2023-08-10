<template>
    <div>
        <h1>LoginComponents</h1>
        <input type="text" name="id" v-model="id">
        {{ id }}
        <button @click="btn();">Login</button>
    </div>
</template>
<script>
export default {
    name: "LoginComponents",
    data() {
        return {
            id: "",
        }
    },
    methods: {
        btn() {
            this.$store.dispatch("login", this.id);
        }
    }
}
</script>
<style>
    
</style>