import Form from '../form'

export default class LoginManager extends Form{
	constructor(data) {
		super(data);
	}

	async login() {
		let apiEnd = '/auth/login';
		let response = await this.post(apiEnd);
		this.showToaster(response.message);
		if(response.success) {
			localStorage.setItem('token', response.data.access_token);
			localStorage.setItem('user', JSON.stringify(response.data.user));
			this.reset();
		}
		return response;
	}

	showToaster(message) {
		console.log(message, 'message')
		this.network.successToast(message)
	}
} 