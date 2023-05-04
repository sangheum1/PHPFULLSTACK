// 1. 요소를 선택하는 방법
// 1-1. ID로 선택하는 방법
const title = document.getElementById('title');
// title.style.color = 'blue';

// 1-2. 태그 명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');
// li[1].style.color = 'yellow'

// 탕수육,볶음밥, 깐풍기 배경 오렌지
// 짜장,짬뽕, 라좌기 배경색상 베이지색

// for(let i in li) {
//     if( i%2 === 0 ) {
//         li[i].style.backgroundColor = 'beige';
//     }
//     else if( i%2 === 1 ) {
//         li[i].style.backgroundColor = 'orange';
//     }
// }
for(let i = 0; i < li.length; i++) {
    if( i%2 === 0 ) {
        li[i].style.backgroundColor = 'beige';
    } else {
        li[i].style.backgroundColor = 'orange';
    }
}

// 3. 클래스 명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none-li') //ㅅ type collection

// 4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none-li'); // type node.list

// querySelectorAll() : 복수의 요소가 있다면 전부 선택
const li3 = document.querySelectorAll('.none-li');

// 2. 요소 조작하기
// 2-1. 콘텐츠를 조작하는 방법(div안에 있던 태그 제거후 값 저장)
// textcontent : 순수한 텍스트 데이터를 전달, 이전 태그들 모두 제거
title.textContent = '<span>바꿨지롱~</span>'; // 스판까지 전부 출력

// innerhtml : 태그는 태그로 인식해서 전달, 이전 태그들 모두 제거
title.innerHTML = '<span>바꿨지롱~</span>'; // 스판이 적용된 후 출력

// 요소에 속성을 추가
const it = document.getElementById('it');
// it.setAttribute('placeholder', '셋어트리뷰트로 삽입');

const aa = document.getElementById('aa');
// aa.setAttribute('href', 'http://www.naver.com')

// 요소의 속성 제거
it.removeAttribute('placeholder');
// aa.removeAttribute('href');

// 요소의 스타일링s
// inline으로 스타일 저장
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue'; // 이렇게 적으면 inline 형태로 저장이 됨

// 클래스로 스타일 추가
aa.classList.add('aa');

// 새로운 요소 만들기
// 요소 만들기
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

// 요소를 자식 요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli); 

// 요소를 특정 위치에 삽입하는 방법
const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore(cli,zzam);


// 해당 요소를 지우는 방법
// cli.remove(); // html 상에서 야끼우동 삭제

// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고,
// 배경색 넣은것도 제대로 나오도록 수정
const kkan = document.querySelector('li:nth-child(7)');
const zab = document.createElement('li');
zab.innerHTML = '잡채밥';
const dong = document.createElement('li');
dong.innerHTML = '동파육';
ul[0].insertBefore(zab,kkan);
ul[0].insertBefore(dong,kkan);

for(let i = 0; i < li.length; i++) {
    if( i%2 === 0 ) {
        li[i].style.backgroundColor = 'beige';
    } else {
        li[i].style.backgroundColor = 'orange';
    }
}