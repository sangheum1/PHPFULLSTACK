// date
// const NOW = new Date('2023-04-30 15:20:30.123'); // Date() : 클래스

// // 연도만 가져오는 메소드
// console.log( NOW.getFullYear() );

// // getMonth() : 월을 가져오는 메소드 ( 현재 월에서 한달 전 출력 )
// console.log( NOW.getMonth() + 1 );

// // getDate() : 날짜를 가져오는 메소드
// console.log( NOW.getDate() );

// // getDay() :요일을 가져오는 메소드 ( 일:0, 월:1, 화:2, 수:3 ...)
// NOW.getDay();

// // getTime() : 1970/01/01 기준으로 몇초가 지났는지 초를 가져온다. (밀리초 반환)
// console.log( NOW.getTime() );

// // getHours() : 시간 가져오는 메소드
// console.log( NOW.getHours() );

// // getMinutes() : 분 가져오는 메소드
// console.log( NOW.getMinutes() );

// // getSeconds() : 초 가져오는 메소드
// console.log( NOW.getSeconds() );

// // getMilliseconds() : 밀리초 가져오는 메소드
// console.log( NOW.getMilliseconds() );

// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 몇일 전인지 출력

const NOW = new Date();
const STNDNOW = new Date( '2022-09-30 19:20:10');
console.log ( Math.floor( NOW.getTime()  / (86400 * 1000) ) );
console.log ( Math.floor( STNDNOW.getTime()  / (86400 * 1000) ) );
console.log ( Math.ceil( (NOW.getTime() - STNDNOW.getTime())  / (86400 * 1000) ) ); // 일
console.log (  (NOW.getTime() - STNDNOW.getTime())  / (24*60*60 * 1000)  );
console.log (  Math.floor( ( (NOW.getTime() - STNDNOW.getTime())  / (60*60 * 1000) ) )%24  ); // 시
console.log (  Math.floor( ( (NOW.getTime() - STNDNOW.getTime())  / (60 * 1000) ) )%60  );    // 분
console.log ( Math.floor( ( (NOW.getTime() - STNDNOW.getTime())  / 1000 ) )%60 );   // 초
