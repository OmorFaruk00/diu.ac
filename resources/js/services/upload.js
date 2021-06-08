export default class Upload {
	constructor(attachment) {
		this.host = ''; //from env
		this.secret = ''; //from env
		this.bucketName = ''; //from env
		this.attachment = attachment;
		this.formdata = new FormData();
	}

	s3() {

	}

	server() {
		
	}

	/**
     * Appending single input to the form data.
	 * For file upload
     *
     * @param  {String} key
     * @param  {File} value
     * @return {FormData}
    */
	append(key, value) {
		this.formdata.append(key, value);
		return this.formdata;
	}

	/**
     * Appending inputs to the form data.
	 * For file upload
     *
     * @param  {Array, Object} inputs
     * @return {FormData}
    */
	appends(inputs) {
		let data = inputs;
		if(!Array.isArray(data)) {
			data = Object.keys(data).map(key => {
				return {
					key: key,
					value: data[key]
				}
			});
		}

		data.forEach(item => {
			this.formdata.append(item.key, item.value);
		});
		return this.formdata;
	}

	log() {
		console.log('=========== FORM DATA ==========');
			for (var pair of this.formdata.entries()) {
				console.log(pair[0] + " : " + pair[1]);
			}
		console.log('=========== FORM DATA ==========');
	}

	reset() {
		for (var key of this.formdata.keys()) {
			this.formdata.delete(key)
		}
	}
}