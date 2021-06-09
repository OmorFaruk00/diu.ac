/*
this class is responsable for
	-api request
	-error handel(404, 500)
*/
import axios from 'axios';

// const axios = window.newAxios;

export default class Network {
    constructor() {
        this.baseURL = 'https://api.diu.ac';
        axios.defaults.baseURL = `${this.baseURL}`;
        axios.defaults.withCredentials = false;
    }

    async api(method, url, data = null) {
        return new Promise((resolve, reject) => {
            axios[method.toLowerCase()](url, data)
                .then(res => {
                    resolve(res.data);
                })
                .catch(err => {
                    console.log('Catch', err.response.data, err.response.status,);
                    reject(err);
                })
        });
    }

}
