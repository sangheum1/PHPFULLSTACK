// 인라인 이벤트 등록
// html파일의 13행 16행 참조
// onclick

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    location.href = 'http://www.google.com';
}