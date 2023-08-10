const TOKEN_ID = "php506_token";

const getToken = () => {
    // local에 있는 토큰아이디 가져오는 방법
    return window.localStorage.getItem(TOKEN_ID);
};

// 토큰 설정
const setToken = token => {
    window.localStorage.setItem(TOKEN_ID, token);
    return true;
}

const destoryToken = () => {
    window.localStorage.removeItem(TOKEN_ID);
    return true;
}

export default {
    getToken,
    setToken,
    destoryToken
}