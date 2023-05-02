console.log("안녕하세요. js 파일입니다.", "두번째");


// ------------------
// 변수
// ------------------

// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";
// u_name = "갑돌이";  // 재할당
// console.log( u_name );

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// u_age = 30; // 재할당

// 상수 const : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// const gender = "남자";
// // gender = "여자";    상수라서 재지정 x



// ------------------
// 스코프
// ------------------

// 전역 스코프
let u_name = "홍길동";

// function test() {
//     console.log( u_name );
// }

// 함수 레벨 스코프
function test() {
    console.log( u_name );
    let u_age = 30;
    console.log( u_age );
}

// 블록 레벨 스코프 = if뒤에 {} 안에 선언된 변수는 {} 이 안에만 사용 가능
function test1() {
    if ( true ) {
        let v_test1 = "함수 테스트1"; // 블록 레벨 스코프 라서 {} 안에서만 사용
        var v_var1 = "var로 선언"; // var은 함수 레벨 스코프 라서 함수 내에서 사용 가능
    }

    // console.log(v_test1);
    console.log(v_var1);
}

// ------------------
// 호이스팅 (hoisting)
// ------------------

// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 or 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것
console.log( hTest() ); // 변수와 값이 다 세팅이 되어 있음
console.log(varTest); // 변수는 있지만 값은 defined 되어있고 67번 라인에 가야 값도 출력됨
console.log(letTest); // let으로 정의한 변수를 최상단에서 초기화를 못시키기 때문에 에러 뜸(var는 초기화 시켜줄 수 있음)
console.log(constTest); // const로 정의한 변수를 최상단에서 초기화를 못시키기 때문에 에러 뜸

function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";

let letTest = "let 변수";

const constTest = "const 상수";