import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    // 데이터 사용 영역
    state() {
        return {
            boardData: {}, //게시글 데이터
            lastId: '', //가장 마지막에 로드된 게시물 id
            addBtnFlg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // tab UI flg(0: 메인, 1: 필터, 2: 작성)
            imgUrl: "", // 이미지 url
            filter: "",
        }
    },
    // js 함수 처리(state 함수 값 변경시 mutations 사용)
    mutations: {
        // 초기 데이터 세팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length-1].id);
        },
        // 더보기 데이터 세팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            // 데이터를 하나만 가져오기 때문에 lastid 갱신 시켜야함(1개만 가져오기때문에 -1같은거 할필요 x)
            this.commit('changeLastId', data.id);
        },
        // lastid 변경
        changeLastId(state,id) {
            state.lastId = id;
        },
        // tab UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // img url 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 필터명 변경
        changeFilter(state, filter) {
            state.filter = filter;
        },
        // 초기화
        clearState(state) {
            state.filter = "";
            state.imgUrl = "";
        },
    },
    // 비동기 처리(ajax같은 것)
    actions: {
        // context는 store을 가리킴(mutations는 커밋으로 접근)
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res=> {
                console.log(res.data);
                // context가 store을 가리킴
                context.commit('createBoardData', res.data);
            })
        },
        // 더보기 눌렀을 때 id 가져와서 렌더링
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                // 데이터 요청했을 때 없으면 빈 배열로 옴
                if(res.data) {
                    context.commit('addBoardData', res.data);
                } else {
                    alert('없어요');
                    context.state.addBtnFlg = false;
                    // document.getElementsByTagName('button')
                }
            })
            .catch( err => {
                console.log(err);
            })
        }
    }
})

export default store