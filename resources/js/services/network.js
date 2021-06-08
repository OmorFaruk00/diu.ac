/*
this class is responsable for
	-api request
	-error handel(404, 500)
*/
import axios from 'axios';
export default class Network{
		constructor() {
		this.baseURL = 'https://api.diu.ac';
		axios.defaults.baseURL = `${this.baseURL}`;
		// axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('token')}`;
		axios.defaults.withCredentials = true;
		}

		async api(method, url, data = null) {
			// await this.csrf();
			return new Promise((resolve, reject) => {
			axios[method.toLowerCase()](url, data)
				.then(res => {
				resolve(res.data);
			})
		.catch(err => {
		console.log('Catch', err.response.data, err.response.status, );
		if(err.response.status == 401) {
		// this.unauthenticated()
		}
		reject(err);
		})
		});
	}


	unauthenticated() {
		store.commit('setToaster', 'Your session expired. Please login');
		store.commit('setDialogComponent', 'LoginComponent');
	}

	successToast(msg){
		store.commit('setToaster', msg);
	}


	csrf() {
	let token =	Cookie.get('XSRF-TOKEN');
	if(!token) {
		return	axios.get('/csrf-cookie')
	}

	return new Promise(resolve => resolve(token))

	}

}
