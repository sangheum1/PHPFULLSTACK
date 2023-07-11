<template>
	<div class="bg_black" v-if="modalFlg">
		<div class="bg_white">
			<img src="">
			<h4>{{ products[productNum].name }}</h4>
			<p>{{ products[productNum].content }}</p>
			<!-- <p>{{ products[productNum].count * products[productNum].price }}</p> -->
			<p>{{ productsNum * products[productNum].price }}</p>
			<!-- <button @click="$emit('plus')">수량증가</button>
			<button @click="$emit('minus')">수량감소</button> -->
			<!-- <span>{{ products[productNum].count }}</span> -->
			<input type="text" v-model="productsNum">
			<span>{{ productsNum }}</span>
			<br>
			<button @click="$emit('closeModal'); productsNum = '0';">닫기</button>
		</div>
	</div>
</template>
<script>
export default {
	name: 'Modal',
	data() {
		return {
			productsNum : "0"
		}
	},
	props: {
		modalFlg: Boolean,
		products: Array,
		productNum: Number,
	},
	watch: {
		productsNum(input) {
			if(input >= 11) {
				alert('10이하만 입력해주세요');
				this.productsNum = "10";
			}
		}
	}
}
</script>
<style>
	
</style>