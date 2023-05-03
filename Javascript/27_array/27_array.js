let arr = [1, 2, 3, 4, 5];

// push() 메소드 : 배열에 값 추가 (array는 클래스임)
arr.push(6);

// 배열 값 삭제 1. delete ( 이방법은 배열에 empty로 남게 되어서 권장 x) => index가 empty로 남아 있음
delete arr[5];

// 2. splice() 메소드 : 배열의 요소를 삭제 또는 교체
arr = [1, 2, 3, 4, 5];
arr.splice(2,1); // 2번째 방부터 1개만 자르겠다.(방은 0부터 5까지 존재 )

// splice() 메소드 : 삭제후 교체 방법
arr.splice(2, 1, 3); // 2번째 방에서 1개 삭제후 3으로 변경
arr.splice(2, 0, 3); // 2번째 방에서 삭제 없이 3을 추가

arr.length; // 변수 arr의 길이값을 반환

arr.splice(arr.length, 0, 10, 11, 12, 13, 14); // arr.length 이후의 매개변수 부터는 가변파라미터로 모든 값을 추가 (10~14)

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
let arr2 = [1, 2, 3, 4, 5];
arr2.indexOf(3);    // value 3의 key값을 반환, but value 값이 없으면 -1을 반환

arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1];
arr2.indexOf(1);    // 1이 여러개 있을때 처음 1의 key 값만 반환후 종료 여기선 0을 반환
arr2.lastIndexOf(1);    // 중복된 value 1의 마지막 값에서 key 값을 반환후 종료 (맨뒤의 키 값 반환)

// slice() 메소드 : 
let tt = 'abcdefg';
tt.slice(2);    // c~g까지 출력
tt.slice(-2);   // 뒤에서 부터 잘라서 출력 여긴 fg

// // 예제
// let fileName = "javaScript.log.php";
// fileName = 'fss.rwrw.erwrw';
// // 아래처럼 콘솔에 출력해주세요
// // javascript, log, php
// const first_dot = fileName.indexOf('.');
// const last_dot = fileName.lastIndexOf('.');
// const first_str = fileName.slice( 0, first_dot );
// const middle_str = fileName.slice( first_dot +1, last_dot );
// const last_str = fileName.slice( last_dot +1 );

// console.log(first_str);
// console.log(middle_str );
// console.log(last_str);

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐 새 배열을 반환
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 );   // concat은 가변파라미터
console.log( arrCon3 );

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별, return 값은 true or false
let arrInc = [1, 2, 3, 4];
console.log( arrInc.includes( 7 ) );

// sort() 메소드 : 배열의 요소를 아스키코드( 컴퓨터가 읽어들이는 기준 ) 기준으로 정렬해서 반환 => 문자열을 기준으로 정렬
const arrSort = [6, 3, 5, 8, 92, 3, 7, 5, 100, 80];
// arrSort.sort(); // [100, 3, 3, 5, 5, 6, 7, 8, 80, 92]; 첫글자 기준으로 적음
arrSort.sort(
    function( a,b ) {       // 6 - 3 을 해서 양수면 값을 바꾸고 음수면 값을 안바꾸고 그다음 3 - 5를 해서 음수면 값을 안바꾸고 그런 방식으로 정렬 될때 까지 재귀함수처럼 계속 불러옴
        return a - b;       // 출력하면 [3, 3, 5, 5, 6, 7, 8, 80, 92, 100] 로 나옴
                            // 반대로 나오게 하려면 b - a 하거나 -(a-b) 하면 됨
    }
);
arrSort.sort( (a, b) => a - b ); // 오름차순 정렬
arrSort.sort( (a, b) => b - a ); // 내림차순 정렬

// join () 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만듦
const arrJoin = [ "안녕", "하세", "요"];
arrJoin.join(); // '안녕,하세,요'
arrJoin.join(''); // '안녕하세요'

// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는 지 판별 ( return 값 true/false )
const arrEvery = [1, 2, 3, 4, 5];
let result = arrEvery.every( function( val ) {
                                return val <= 5;    // 배열이 모두 통과해야 true값 출력 하나라도 불통과시 false 값
                                });
// console.log(result);

// 모든 요소의 2로 나눈 나머지가 0인지 판별
let result_1 = arrEvery.every( function( val ) {
                                    return val%2 === 0;
                                    });
console.log(result_1);
let result_2 = arrEvery.every(val => val%2 === 0);      // 주소 값을 넘겨준다.

// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1, 2, 3, 4, 5];
let result_3 = arrSome.some( val => val >= 5 );     // 배열의 값중 1개라도 만족할시 true 출력
console.log( result_3 );

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, ,5];
let result_4 = arrFilter.filter( val => val >= 3 );
console.log ( result_4 );

// 경고창 출력
alert ('경고');