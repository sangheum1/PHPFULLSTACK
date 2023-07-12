<template lang="">
    <div>
        <h1>PostComponent.vue</h1>
        <p>{{propsTest}}</p>
        <!-- <p>{{ test }}</p> -->
    </div>
    <div>
        <!-- slot은 값만 보내지는게 아니라 html 다 보냄 -->
    <slot></slot>
    </div>
</template>
<script>
import { ref,toRefs } from 'vue';
export default {
    name: 'PostComponent',
    props: {
        propsTest: Number,
    },
    // 초기 데이터 가져 올때 axios로 바로 사용하면 가능(vuex 처럼 created 만들필요 x)
    setup(props) {
        let data = ref({});
        let {propsTest} = toRefs(props);
        console.log(propsTest.value);

        return {data};
    },
}
</script>
<style lang="">
    
</style>