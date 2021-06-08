/*
	this class is responsible for
		-form handling
		-form validation
*/

import Network from './network';
import Error from './error';
import { isEmpty } from 'lodash'
export default class Form {
    constructor(data) {

        this.originalData = data;

        for (let field in data) {
            this[field] = data[field]
        }

        this.network = new Network;
        this.error = new Error;

        this.message = '',
        this.loading = false
    }

    reset() {
        for (let field in this.originalData) {
            this[field] = ''
        }
    }

    submit(method, endPoint, data) {
        this.loading = true;
        return new Promise((resolve, reject) => {
            this.network.api(method, endPoint, data)
                .then(response => {
                    resolve(response);
                    //this.success(response);
                })
                .catch(error => {
                    reject(error)
                    this.failed(error);
                })
                .finally(() => this.loading = false)
        });
    }

    successMessage() {
        return this.message;
    }

    success(msg = '') {
        this.message = msg;
        this.reset();
    }

    failed(errors) {
        this.error.set(errors.response.data.errors)
    }

    validate(data) {
        let errors = {};
        for (let item in data) {
            if (data[item] == '') {
                errors[item] = [`${item} field is required`];
            }
        }
        this.error.set(errors)
        return Object.keys(errors).length == 0;
    }

    //helper methods

    data() {
        let data = {};
        for (let property in this.originalData) {
            data[property] = this[property];
        }
        return data;
    }

    /**
     * Post method for post request
     *
     * @param  {String} endPoint
     * @return {null}
     */
    post(url, callback) {
        let data = this.data();
        if(typeof(callback) == "function") {
          data = callback(data) || {};
        } else if (typeof(callback) == "object") {
            data = callback;
        }

        return this.submit('post', url, data);
    }

    /**
     * Submit the form via a GET request.
     *
     * @param  {String} url
     * @param  {Object} config (axios config)
     * @return {Promise}
     */
    get(url, data = null) {
        let params = null;
        if(data || !isEmpty(this.data())) {
            params = {
                params: data || this.data()
            }
        }
       return this.submit('get', url, params)
    }

    /**
     * Post method for post request
     *
     * @param  {String} endPoint
     * @return {null}
    */
    put(url, callback) {
        let data = this.data();
        if(typeof(callback) == "function") {
          data = callback(data) || {};
        } else if (typeof(callback) == "object") {
            data = callback;
        }
        return this.submit('put', url, data);
    }

    // delete(endPoint) {

    // }

}