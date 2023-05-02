// 제어문

// // 조건문
// let i = 3;
// if ( i>0 ) {
//     console.log("i는 0보다 크다");
// } else if ( i<0 ){
//     console.log("1은 0보다 작다")
// } else {
//     console.log("기타 등등");
// }

// let u_age = 30;
// switch ( u_age ) {
//     case 20:
//         console.log("20살");
//         break;

//     default:
//         console.log(u_age + "살");
//         break;
// }

// ------------------
// 반복문 (while, do_while, for, foreach, for...in, for...of )
// ------------------
// let num = 0;
// while( num <= 3 ) {
//     console.log( num );
//     num++;
// }

// let i = 1;
// do {
//     console.log( "2x" + i + "=" + 2*i )
//     i++;
// } while ( i<=9 );

// let dan = 2;
// let i = 1;
// for( let i = 1; i <= 9; i++) {
//     console.log( dan + " * " + i + " = " + (dan*i) );
// }

let arr = [1, 2, 3, 4];

// 배열만 클래스에 속한 foreach 메소드를 불러와서 사용 가능 (function은 이름 지정하는 것)
// arr.forEach( function(val) {
//     console.log(val);
// }
// );

// for...in : 모든 객체를 루프 가능 ( let은 key )
// arr = {
//     u_name: "홍길동"
//     , u_age: 0
// };

// for( let i in arr ) {
//     console.log( i + arr[i] );
// }

// for...of : i가 value값 출력 => key가 기본상태인 index 배열만 console에 찍히고 키를 지정하고 값을 추가한 것은 console 에서 안 나옴
arr = [5, 4, 3, 2];
arr.num = 2;

for( let i of arr ) {
    console.log( i );
}