// 데이터 타입

// 숫자 (number) <-> php의 int
let num = 1;

// 문자열 (string) <-> php랑 동일
let str = "안녕";

// 불리언 (boolean) <-> 참거짓
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼( symbol ) : S_CONST1랑 S_CONST2 typeof로 비교할시 심볼 각각이 고유값이기 때문에 false 출력
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");


// ------------------
// 객체 타입( JSON )
// ------------------

// 종류 : 배열, date, object, 함수

let obj1 = {
    u_name: "홍길동"
    , u_age: 30
    , u_gender: "남자"
    , test: function() {
        console.log("객체 함수 test")
    }
    , addr: {
        addr1: "대구"
        , addr2: "중구"
    }
}

// 배열 (ARRAY) => index 형태( php에서만 연상 배열 존재(2차원배열 같은) )
let arr = [ "탕수육", "짜장면", "짬뽕" ];


