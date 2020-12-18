import axios from 'axios';

const instance = axios.create({
    withCredentials: false,
    baseURL: 'http://api.localhost:8881/',
    headers: {
    }
});

export const unitsAPI = {
    getUnits() {
        return instance.get(`units`)
        .then(response => response.data)
    }
}

export default null