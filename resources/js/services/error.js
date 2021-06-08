	/*
this class is responsible for
	-form error handle
	-form reset
*/

export default class Error{
	constructor() {
		this.errors = {}
	}
	get(field) {
		if(this.errors[field]) {
			return this.errors[field][0]
		}
	}
	set(errors) {
		this.errors = errors;
	}
	has(field) {
		if(this.errors) {
			// return this.errors.hasOwnProperty(field);
			return Object.hasOwnProperty.call(this.errors, field);
		}
	}

	clear(field) {
		delete this.errors[field];
	}
	any() {
		return Object.keys(this.errors).length > 0;
	}

	reset() {
		this.errors = {}
	}


}

