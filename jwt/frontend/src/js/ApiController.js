import axios from 'axios';
import tc from './TokenController.js';

const apiController = axios.create({
    baseURL: "http://localhost:8000"
});

// interceptors : axios 실행후 서버 요청할때 use에 있는 것 실행
apiController.interceptors.request.use(
    config => {
        config.headers["content-Type"] = "application/json; charset=utf-8";
        if( tc.getToken() ) {
            config.headers["Authorization"] = tc.getToken();
        }
        return config;
    },
    error => {
        console.log(error);
        return Promise.reject(error);
    }
);

export default apiController;